<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Mail\NewUserMail;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Rules\Password;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            "password"      => ['required', 'confirmed', new \Laravel\Fortify\Rules\Password, 'string'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $role = Role::where("name","administrator")->first();
        $user->roles()->attach($role);

        Mail::to($request->email)->send(new NewUserMail($request->name,$request->email,$request->password));

        return Redirect::back()->with("success", "New User Created!");
    }

    public function logout()
    {
        Auth::logout();
        Redirect::to("home");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function login(Request $request): JsonResponse
    {
        $request->validate([
            "email"         => ['required'],
            "password"      => ['required'],
            'device_name'   => ['required'],
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        $token=$user->createToken($request->device_name)->plainTextToken;

        return response()->json([
            'user'  =>  new UserResource($user),
            'token' =>  $token
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function register(Request $request): JsonResponse
    {
        $request->validate([
            "first_name"     => ['required','string', 'max:255'],
            "last_name"      => ['required','string', 'max:255'],
            "email"         => ['required','unique:users','email','string'],
            "password"      => ['required', 'confirmed', new Password, 'string'],
            'phone_number'  => ['required',],
            'device_name'   => ['required'],
//            'role_id'       => ['required'],
        ]);

        $user=User::create([
            "first_name"     => ucwords($request->first_name),
            "middle_name"    => ucwords($request->middle_name),
            "last_name"      => ucwords($request->last_name),
            "email"         => $request->email,
            "phone_number"  => $request->phone_number,
            "password"      => bcrypt($request->password),
        ]);

        $role = Role::where("name","normal")->first();
        $user->roles()->attach($role);

        $token=$user->createToken($request->device_name)->plainTextToken;
        //Email new user with credentials

        return response()->json([
            'user'  =>  new UserResource($user),
            'token' =>  $token
        ]);
    }
}
