<?php

namespace App\Http\Controllers;

use App\Mail\NewUserMail;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

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
}
