<?php

namespace App\Http\Controllers;

use App\Http\Resources\FoodResource;
use App\Http\Resources\GroupResource;
use App\Models\Food;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        return response()->json(FoodResource::collection($foods));
    }

    public function seeder(Request $request)
    {
        foreach ($request->foods as $food) {
            $arr = explode('(',$food["item"]);
            $item = trim($arr[0]);
            $translation="";
            if (array_key_exists(1,$arr)){
                $translation = trim($arr[1]);
                $translation = str_replace(")","",$translation);
            }
            if($item[-1] == ","){
                $item = substr($item,0,-1);
            }

            Food::create([
                "code"                  =>$food["code"],
                "ref_no"                =>$food["ref_no"],
                "item"                  =>$item,
                "translation"           =>$translation,
                "group_id"              =>$food["group"],
                "moisture"              =>$food["moisture"],
                "energy_kcal"           =>$food["energy_kcal"],
                "energy_kj"             =>$food["energy_kj"],
                "nitrogen"              =>$food["nitrogen"],
                "protein"               =>$food["protein"],
                "fats"                  =>$food["fats"],
                "saturated_fa"          =>$food["saturated_fa"],
                "monounsaturated_fa"   =>$food["monounsaturated_fa"],
                "polyunsaturated_fa"    =>$food["polyunsaturated_fa"],
                "cholesterol"           =>$food["cholesterol"],
                "cho_udb"               =>$food["cho_udb"],
                "cho_avail"             =>$food["cho_avail"],
                "sugars"                =>$food["sugars"],
                "added_sugar"           =>$food["added_sugar"],
                "fibre"                 =>$food["fibre"],
                "starch"                =>$food["starch"],
                "ash"                   =>$food["ash"],
                "ca"                    =>$food["ca"],
                "fe"                    =>$food["fe"],
                "mg"                    =>$food["mg"],
                "p"                     =>$food["p"],
                "k"                     =>$food["k"],
                "na"                    =>$food["na"],
                "zn"                    =>$food["zn"],
                "cu"                    =>$food["cu"],
                "mn"                    =>$food["mn"],
                "i"                     =>$food["i"],
                "se"                    =>$food["se"],
                "vitamin_a_rae"         =>$food["vitamin_a_rae"],
                "vitamin_a_re"          =>$food["vitamin_a_re"],
                "thiamin"               =>$food["thiamin"],
                "riboflavin"            =>$food["riboflavin"],
                "niacin"                =>$food["niacin"],
                "vitamin_b6"            =>$food["vitamin_b6"],
                "folic_acid"            =>$food["folic_acid"],
                "vitamin_b12"           =>$food["vitamin_b12"],
                "pantothenate"          =>$food["pantothenate"],
                "biotin"                =>$food["biotin"],
                "vitamin_c"             =>$food["vitamin_c"],
                "vitamin_d"             =>$food["vitamin_d"],
                "vitamin_e"             =>$food["vitamin_e"],
                "phytic_acid"           =>$food["phytic_acid"],
                "source_id"             =>$food["source"],
            ]);
        }

        dd("Food Database Seeded");

    }

    public function show($code)
    {
        //find out if the request is valid
        $food=Food::where('code',$code)->first();

        if(is_object($food)){
            $groups=Group::all();
            return Inertia::render('Food',[
                'food'  =>  new FoodResource($food),
                'groups'    => GroupResource::collection($groups),
            ]);

        }else{
            return Redirect::route('home');
        }

    }
}
