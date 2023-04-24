<?php

namespace App\Http\Controllers;

use App\Http\Resources\FoodResource;
use App\Http\Resources\GroupResource;
use App\Models\Food;
use App\Models\Group;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AppController extends Controller
{
    public function home()
    {
        $group=Group::inRandomOrder()->first();
        return Inertia::render('Home',[
            'group' => $group
        ]);
    }

    public function compositionTable()
    {
        $groups=Group::all();
        $foods=Food::orderBy('group_id','asc')->get();
        return Inertia::render('CompositionTable',[
            'groups'    => GroupResource::collection($groups),
            'foods'    => FoodResource::collection($foods),

        ]);
    }

    public function recipeCalculator()
    {
        $groups=Group::all();
        $foods=Food::orderBy('group_id','asc')->get();
        return Inertia::render('RecipeCalculator',[
            'groups'    => GroupResource::collection($groups),
            'foods'    => FoodResource::collection($foods),

        ]);
    }

    public function search(Request $request)
    {
        $query = $request->query('query');

        if($query !== null){
            $foods=Food::where('code', 'like', '%' .$query. '%')
                ->orWhere('ref_no', 'like', '%' .$query. '%')
                ->orWhere('item', 'like', '%' .$query. '%')
                ->get();
        }else{
//            $query = 'all';
            $foods=Food::orderBy('code','asc')->get();
        }
        $groups=Group::all();

        return Inertia::render('Search',[
            'groups'    => GroupResource::collection($groups),
            'foods'     => FoodResource::collection($foods),
            'query'     => ucfirst($query)
        ]);
    }

    public function projectOverview()
    {
        return Inertia::render("ProjectOverview");
    }

    public function faqs()
    {
        return Inertia::render("FAQS");
    }

    public function contactUs()
    {
        return Inertia::render("ContactUs");
    }
}
