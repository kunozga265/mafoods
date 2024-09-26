<?php

namespace App\Http\Controllers;

use App\Http\Resources\RecipeResource;
use App\Http\Resources\RequestFormResource;
use App\Mail\GeneratedRecipeMail;
use App\Models\Food;
use App\Models\Recipe;
use App\Models\RetentionFactor;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class RecipeController extends Controller
{
    public function index(Request $request, $timestamp)
    {
        $user = User::find(Auth::id());
        if (isset($timestamp) && $timestamp > 0){
            $time = Carbon::createFromTimestamp($timestamp);
            $recipes = $user->recipes()->where("created_at",">",$time)->get();
        }else {
            $recipes = $user->recipes;
        }

        return response()->json(["recipes" => RecipeResource::collection($recipes)]);
    }

    public function store(Request  $request)
    {
        $request->validate([
            'name'                  => 'required',
            'final_cooked_weight'   => 'required',
            'ingredients'           => 'required'
        ]);

        $ingredients = [];

        foreach ($request->ingredients as $ingredient){
            $food = Food::find($ingredient["food_id"]);
            $retention_factor = RetentionFactor::find($ingredient["retention_factor_id"]);

            $ingredients[] = [
                "weight"=> $ingredient["weight"],

                "moisture"=> $food->moisture,
                "energy_kcal"=> $food->energy_kcal,
                "energy_kj"=> $food->energy_kj,
                "nitrogen"=> $food->nitrogen,
                "protein"=> $food->protein,
                "fats"=> $food->fats,
                "saturated_fa"=> $food->saturated_fa,
                "monounsaturated_fa"=> $food->monounsaturated_fa,
                "polyunsaturated_fa"=> $food->polyunsaturated_fa,
                "cholesterol"=> $food->cholesterol,
                "cho_udb"=> $food->cho_udb,
                "cho_avail"=> $food->cho_avail,
                "sugars"=> $food->sugars,
                "added_sugar"=> $food->added_sugar,
                "fibre"=> $food->fibre,
                "starch"=> $food->starch,
                "ash"=> $food->ash,
                "mn"=> $food->mn,
                "i"=> $food->i,
                "se"=> $food->se,
                "vitamin_a_re"=> $food->vitamin_a_re,
                "phytic_acid"=> $food->phytic_acid,

                //corrected by retention factors
                "ca"=> $food->ca != null ? $food->ca * (!is_object($retention_factor) ? 1 : $retention_factor->ca)  : 0,
                "fe"=> $food->fe != null ? $food->fe * (!is_object($retention_factor) ? 1 : $retention_factor->fe)  : 0,
                "mg"=> $food->mg != null ? $food->mg * (!is_object($retention_factor) ? 1 : $retention_factor->mg)  : 0,
                "p"=> $food->p != null ? $food->p * (!is_object($retention_factor) ? 1 : $retention_factor->p)  : 0,
                "k"=> $food->k != null ? $food->k * (!is_object($retention_factor) ? 1 : $retention_factor->k)  : 0,
                "na"=> $food->na != null ? $food->na * (!is_object($retention_factor) ? 1 : $retention_factor->na)  : 0,
                "zn"=> $food->zn != null ? $food->zn * (!is_object($retention_factor) ? 1 : $retention_factor->zn)  : 0,
                "cu"=> $food->cu != null ? $food->cu * (!is_object($retention_factor) ? 1 : $retention_factor->cu)  : 0,
                "vitamin_a_rae"=> $food->vitamin_a_rae != null ? $food->vitamin_a_rae * (!is_object($retention_factor) ? 1 : $retention_factor->vitamin_a_rae)  : 0,
                "thiamin"=> $food->thiamin != null ? $food->thiamin * (!is_object($retention_factor) ? 1 : $retention_factor->thiamin)  : 0,
                "riboflavin"=> $food->riboflavin != null ? $food->riboflavin * (!is_object($retention_factor) ? 1 : $retention_factor->riboflavin)  : 0,
                "niacin"=> $food->niacin != null ? $food->niacin * (!is_object($retention_factor) ? 1 : $retention_factor->niacin)  : 0,
                "vitamin_b6"=> $food->vitamin_b6 != null ? $food->vitamin_b6 * (!is_object($retention_factor) ? 1 : $retention_factor->vitamin_b6)  : 0,
                "folic_acid"=> $food->folic_acid != null ? $food->folic_acid * (!is_object($retention_factor) ? 1 : $retention_factor->folic_acid)  : 0,
                "vitamin_b12"=> $food->vitamin_b12 != null ? $food->vitamin_b12 * (!is_object($retention_factor) ? 1 : $retention_factor->vitamin_b12)  : 0,
                "pantothenate"=> $food->pantothenate != null ? $food->pantothenate * (!is_object($retention_factor) ? 1 : $retention_factor->pantothenate)  : 0,
                "biotin"=> $food->biotin != null ? $food->biotin * (!is_object($retention_factor) ? 1 : $retention_factor->biotin)  : 0,
                "vitamin_c"=> $food->vitamin_c != null ? $food->vitamin_c * (!is_object($retention_factor) ? 1 : $retention_factor->vitamin_c)  : 0,
                "vitamin_d"=> $food->vitamin_d != null ? $food->vitamin_d * (!is_object($retention_factor) ? 1 : $retention_factor->vitamin_d)  : 0,
                "vitamin_e"=> $food->vitamin_e != null ? $food->vitamin_e * (!is_object($retention_factor) ? 1 : $retention_factor->vitamin_e)  : 0,
            ];
        }

        //declare results object
        $final_cooked_weight = $request->final_cooked_weight;
        $initial_weight = 0;
        $results = [
            "moisture"=>0,
            "energy_kcal"=>0,
            "energy_kj"=>0,
            "nitrogen"=>0,
            "protein"=>0,
            "fats"=>0,
            "saturated_fa"=>0,
            "monounsaturated_fa"=>0,
            "polyunsaturated_fa"=>0,
            "cholesterol"=>0,
            "cho_udb"=>0,
            "cho_avail"=>0,
            "sugars"=>0,
            "added_sugar"=>0,
            "fibre"=>0,
            "starch"=>0,
            "ash"=>0,
            "mn"=>0,
            "i"=>0,
            "se"=>0,
            "vitamin_a_re"=>0,
            "phytic_acid"=>0,

            //corrected by retention factors
            "ca"=>0,
            "fe"=>0,
            "mg"=>0,
            "p"=>0,
            "k"=>0,
            "na"=>0,
            "zn"=>0,
            "cu"=>0,
            "vitamin_a_rae"=>0,
            "thiamin"=>0,
            "riboflavin"=>0,
            "niacin"=>0,
            "vitamin_b6"=>0,
            "folic_acid"=>0,
            "vitamin_b12"=>0,
            "pantothenate"=>0,
            "biotin"=>0,
            "vitamin_c"=>0,
            "vitamin_d"=>0,
            "vitamin_e"=>0,
        ];

        //calculate nutrients to match grams submitted
        foreach ($ingredients as $ingredient){
            $initial_weight += $ingredient["weight"];
            $results["moisture"] += floatval($ingredient["moisture"]) * floatval($ingredient["weight"]) / 100;
            $results["energy_kcal"] += floatval($ingredient["energy_kcal"]) * floatval($ingredient["weight"]) / 100;
            $results["energy_kj"] += floatval($ingredient["energy_kj"]) * floatval($ingredient["weight"]) / 100;
            $results["nitrogen"] += floatval($ingredient["nitrogen"]) * floatval($ingredient["weight"]) / 100;
            $results["protein"] += floatval($ingredient["protein"]) * floatval($ingredient["weight"]) / 100;
            $results["fats"] += floatval($ingredient["fats"]) * floatval($ingredient["weight"]) / 100;
            $results["saturated_fa"] += floatval($ingredient["saturated_fa"]) * floatval($ingredient["weight"]) / 100;
            $results["monounsaturated_fa"] += floatval($ingredient["monounsaturated_fa"]) * floatval($ingredient["weight"]) / 100;
            $results["polyunsaturated_fa"] += floatval($ingredient["polyunsaturated_fa"]) * floatval($ingredient["weight"]) / 100;
            $results["cholesterol"] += floatval($ingredient["cholesterol"]) * floatval($ingredient["weight"]) / 100;
            $results["cho_udb"] += floatval($ingredient["cho_udb"]) * floatval($ingredient["weight"]) / 100;
            $results["cho_avail"] += floatval($ingredient["cho_avail"]) * floatval($ingredient["weight"]) / 100;
            $results["sugars"] += floatval($ingredient["sugars"]) * floatval($ingredient["weight"]) / 100;
            $results["added_sugar"] += floatval($ingredient["added_sugar"]) * floatval($ingredient["weight"]) / 100;
            $results["fibre"] += floatval($ingredient["fibre"]) * floatval($ingredient["weight"]) / 100;
            $results["starch"] += floatval($ingredient["starch"]) * floatval($ingredient["weight"]) / 100;
            $results["ash"] += floatval($ingredient["ash"]) * floatval($ingredient["weight"]) / 100;
            $results["mn"] += floatval($ingredient["mn"]) * floatval($ingredient["weight"]) / 100;
            $results["i"] += floatval($ingredient["i"]) * floatval($ingredient["weight"]) / 100;
            $results["se"] += floatval($ingredient["se"]) * floatval($ingredient["weight"]) / 100;
            $results["vitamin_a_re"] += floatval($ingredient["vitamin_a_re"]) * floatval($ingredient["weight"]) / 100;
            $results["phytic_acid"] += floatval($ingredient["phytic_acid"]) * floatval($ingredient["weight"]) / 100;
            $results["ca"] += floatval($ingredient["ca"]) * floatval($ingredient["weight"]) / 100;
            $results["fe"] += floatval($ingredient["fe"]) * floatval($ingredient["weight"]) / 100;
            $results["mg"] += floatval($ingredient["mg"]) * floatval($ingredient["weight"]) / 100;
            $results["p"] += floatval($ingredient["p"]) * floatval($ingredient["weight"]) / 100;
            $results["k"] += floatval($ingredient["k"]) * floatval($ingredient["weight"]) / 100;
            $results["na"] += floatval($ingredient["na"]) * floatval($ingredient["weight"]) / 100;
            $results["zn"] += floatval($ingredient["zn"]) * floatval($ingredient["weight"]) / 100;
            $results["cu"] += floatval($ingredient["cu"]) * floatval($ingredient["weight"]) / 100;
            $results["vitamin_a_rae"] += floatval($ingredient["vitamin_a_rae"]) * floatval($ingredient["weight"]) / 100;
            $results["thiamin"] += floatval($ingredient["thiamin"]) * floatval($ingredient["weight"]) / 100;
            $results["riboflavin"] += floatval($ingredient["riboflavin"]) * floatval($ingredient["weight"]) / 100;
            $results["niacin"] += floatval($ingredient["niacin"]) * floatval($ingredient["weight"]) / 100;
            $results["vitamin_b6"] += floatval($ingredient["vitamin_b6"]) * floatval($ingredient["weight"]) / 100;
            $results["folic_acid"] += floatval($ingredient["folic_acid"]) * floatval($ingredient["weight"]) / 100;
            $results["vitamin_b12"] += floatval($ingredient["vitamin_b12"]) * floatval($ingredient["weight"]) / 100;
            $results["pantothenate"] += floatval($ingredient["pantothenate"]) * floatval($ingredient["weight"]) / 100;
            $results["biotin"] += floatval($ingredient["biotin"]) * floatval($ingredient["weight"]) / 100;
            $results["vitamin_c"] += floatval($ingredient["vitamin_c"]) * floatval($ingredient["weight"]) / 100;
            $results["vitamin_d"] += floatval($ingredient["vitamin_d"]) * floatval($ingredient["weight"]) / 100;
            $results["vitamin_e"] += floatval($ingredient["vitamin_e"]) * floatval($ingredient["weight"]) / 100;
        }

        //calculate nutrients as a fraction of final weight served by 100 grams
        $results["moisture"] = (($results["moisture"] - ($initial_weight - $final_cooked_weight)) / $final_cooked_weight) * 100;
        $results["energy_kcal"] = ($results["energy_kcal"] / $final_cooked_weight) * 100;
        $results["energy_kj"] = ($results["energy_kj"] / $final_cooked_weight) * 100;
        $results["nitrogen"] = ($results["nitrogen"] / $final_cooked_weight) * 100;
        $results["protein"] = ($results["protein"] / $final_cooked_weight) * 100;
        $results["fats"] = ($results["fats"] / $final_cooked_weight) * 100;
        $results["saturated_fa"] = ($results["saturated_fa"] / $final_cooked_weight) * 100;
        $results["monounsaturated_fa"] = ($results["monounsaturated_fa"] / $final_cooked_weight) * 100;
        $results["polyunsaturated_fa"] = ($results["polyunsaturated_fa"] / $final_cooked_weight) * 100;
        $results["cholesterol"] = ($results["cholesterol"] / $final_cooked_weight) * 100;
        $results["cho_udb"] = ($results["cho_udb"] / $final_cooked_weight) * 100;
        $results["cho_avail"] = ($results["cho_avail"] / $final_cooked_weight) * 100;
        $results["sugars"] = ($results["sugars"] / $final_cooked_weight) * 100;
        $results["added_sugar"] = ($results["added_sugar"] / $final_cooked_weight) * 100;
        $results["fibre"] = ($results["fibre"] / $final_cooked_weight) * 100;
        $results["starch"] = ($results["starch"] / $final_cooked_weight) * 100;
        $results["ash"] = ($results["ash"] / $final_cooked_weight) * 100;
        $results["mn"] = ($results["mn"] / $final_cooked_weight) * 100;
        $results["i"] = ($results["i"] / $final_cooked_weight) * 100;
        $results["se"] = ($results["se"] / $final_cooked_weight) * 100;
        $results["vitamin_a_re"] = ($results["vitamin_a_re"] / $final_cooked_weight) * 100;
        $results["phytic_acid"] = ($results["phytic_acid"] / $final_cooked_weight) * 100;
        $results["ca"] = ($results["ca"] / $final_cooked_weight) * 100;
        $results["fe"] = ($results["fe"] / $final_cooked_weight) * 100;
        $results["mg"] = ($results["mg"] / $final_cooked_weight) * 100;
        $results["p"] = ($results["p"] / $final_cooked_weight) * 100;
        $results["k"] = ($results["k"] / $final_cooked_weight) * 100;
        $results["na"] = ($results["na"] / $final_cooked_weight) * 100;
        $results["zn"] = ($results["zn"] / $final_cooked_weight) * 100;
        $results["cu"] = ($results["cu"] / $final_cooked_weight) * 100;
        $results["vitamin_a_rae"] = ($results["vitamin_a_rae"] / $final_cooked_weight) * 100;
        $results["thiamin"] = ($results["thiamin"] / $final_cooked_weight) * 100;
        $results["riboflavin"] = ($results["riboflavin"] / $final_cooked_weight) * 100;
        $results["niacin"] = ($results["niacin"] / $final_cooked_weight) * 100;
        $results["vitamin_b6"] = ($results["vitamin_b6"] / $final_cooked_weight) * 100;
        $results["folic_acid"] = ($results["folic_acid"] / $final_cooked_weight) * 100;
        $results["vitamin_b12"] = ($results["vitamin_b12"] / $final_cooked_weight) * 100;
        $results["pantothenate"] = ($results["pantothenate"] / $final_cooked_weight) * 100;
        $results["biotin"] = ($results["biotin"] / $final_cooked_weight) * 100;
        $results["vitamin_c"] = ($results["vitamin_c"] / $final_cooked_weight) * 100;
        $results["vitamin_d"] = ($results["vitamin_d"] / $final_cooked_weight) * 100;
        $results["vitamin_e"] = ($results["vitamin_e"] / $final_cooked_weight) * 100;

        //save results
        $recipe = Recipe::create([
            "name"                      =>$request->name,
            "initial_weight"            =>$initial_weight,
            "final_cooked_weight"       =>$final_cooked_weight,

            //nutrients
            "sum_of_proximates"         =>$results["moisture"] + $results["protein"] + $results["fats"] + $results["cho_avail"] + $results["fibre"] + $results["ash"],
            "moisture"                  =>$results["moisture"],
            "energy_kcal"               =>($results["protein"]*4) + ($results["fats"]*9) + ($results["cho_avail"]*4) + ($results["fibre"]*2),
            "energy_kj"                 =>($results["protein"]*17) + ($results["fats"]*37) + ($results["cho_avail"]*17) + ($results["fibre"]*8),
            "nitrogen"                  =>$results["nitrogen"],
            "protein"                   =>$results["protein"],
            "fats"                      =>$results["fats"],
            "saturated_fa"              =>$results["saturated_fa"],
            "monounsaturated_fa"        =>$results["monounsaturated_fa"],
            "polyunsaturated_fa"        =>$results["polyunsaturated_fa"],
            "cholesterol"               =>$results["cholesterol"],
            "cho_udb"                   =>$results["cho_udb"],
            "cho_avail"                 =>$results["cho_avail"],
            "sugars"                    =>$results["sugars"],
            "added_sugar"               =>$results["added_sugar"],
            "fibre"                     =>$results["fibre"],
            "starch"                    =>$results["starch"],
            "ash"                       =>$results["ash"],
            "mn"                        =>$results["mn"],
            "i"                         =>$results["i"],
            "se"                        =>$results["se"],
            "vitamin_a_re"              =>$results["vitamin_a_re"],
            "phytic_acid"               =>$results["phytic_acid"],
            "ca"                        =>$results["ca"],
            "fe"                        =>$results["fe"],
            "mg"                        =>$results["mg"],
            "p"                         =>$results["p"],
            "k"                         =>$results["k"],
            "na"                        =>$results["na"],
            "zn"                        =>$results["zn"],
            "cu"                        =>$results["cu"],
            "vitamin_a_rae"             =>$results["vitamin_a_rae"],
            "thiamin"                   =>$results["thiamin"],
            "riboflavin"                =>$results["riboflavin"],
            "niacin"                    =>$results["niacin"],
            "vitamin_b6"                =>$results["vitamin_b6"],
            "folic_acid"                =>$results["folic_acid"],
            "vitamin_b12"               =>$results["vitamin_b12"],
            "pantothenate"              =>$results["pantothenate"],
            "biotin"                    =>$results["biotin"],
            "vitamin_c"                 =>$results["vitamin_c"],
            "vitamin_d"                 =>$results["vitamin_d"],
            "vitamin_e"                 =>$results["vitamin_e"],
        ]);

        return response()->json(new RecipeResource($recipe));

    }

    public function storeWeb(Request  $request)
    {
        $request->validate([
            'name'                  => 'required',
            'final_cooked_weight'   => 'required',
            'ingredients'           => 'required',
        ]);

//        $user = (new AppController())->getAuthUser($request);
        $user = User::find(Auth::id());

        if($user != null){
            $user_name = $user->first_name. " ".$user->last_name;
            $user_email = $user->email;
        }else{
            $request->validate([
                'user_email'          => 'required',
                'user_name'           => 'required'
            ]);
            $user_name = $request->user_name;
            $user_email = $request->user_email;
        }

        $ingredients = [];

        foreach ($request->ingredients as $ingredient){
            $food = Food::find($ingredient["food_id"]);
            $retention_factor = RetentionFactor::find($ingredient["retention_factor_id"]);

            $ingredients[] = [
                "weight"=> $ingredient["weight"],

                "moisture"=> $food->moisture,
                "energy_kcal"=> $food->energy_kcal,
                "energy_kj"=> $food->energy_kj,
                "nitrogen"=> $food->nitrogen,
                "protein"=> $food->protein,
                "fats"=> $food->fats,
                "saturated_fa"=> $food->saturated_fa,
                "monounsaturated_fa"=> $food->monounsaturated_fa,
                "polyunsaturated_fa"=> $food->polyunsaturated_fa,
                "cholesterol"=> $food->cholesterol,
                "cho_udb"=> $food->cho_udb,
                "cho_avail"=> $food->cho_avail,
                "sugars"=> $food->sugars,
                "added_sugar"=> $food->added_sugar,
                "fibre"=> $food->fibre,
                "starch"=> $food->starch,
                "ash"=> $food->ash,
                "mn"=> $food->mn,
                "i"=> $food->i,
                "se"=> $food->se,
                "vitamin_a_re"=> $food->vitamin_a_re,
                "phytic_acid"=> $food->phytic_acid,

                //corrected by retention factors
                "ca"=> $food->ca != null ? $food->ca * (!is_object($retention_factor) ? 1 : $retention_factor->ca)  : 0,
                "fe"=> $food->fe != null ? $food->fe * (!is_object($retention_factor) ? 1 : $retention_factor->fe)  : 0,
                "mg"=> $food->mg != null ? $food->mg * (!is_object($retention_factor) ? 1 : $retention_factor->mg)  : 0,
                "p"=> $food->p != null ? $food->p * (!is_object($retention_factor) ? 1 : $retention_factor->p)  : 0,
                "k"=> $food->k != null ? $food->k * (!is_object($retention_factor) ? 1 : $retention_factor->k)  : 0,
                "na"=> $food->na != null ? $food->na * (!is_object($retention_factor) ? 1 : $retention_factor->na)  : 0,
                "zn"=> $food->zn != null ? $food->zn * (!is_object($retention_factor) ? 1 : $retention_factor->zn)  : 0,
                "cu"=> $food->cu != null ? $food->cu * (!is_object($retention_factor) ? 1 : $retention_factor->cu)  : 0,
                "vitamin_a_rae"=> $food->vitamin_a_rae != null ? $food->vitamin_a_rae * (!is_object($retention_factor) ? 1 : $retention_factor->vitamin_a_rae)  : 0,
                "thiamin"=> $food->thiamin != null ? $food->thiamin * (!is_object($retention_factor) ? 1 : $retention_factor->thiamin)  : 0,
                "riboflavin"=> $food->riboflavin != null ? $food->riboflavin * (!is_object($retention_factor) ? 1 : $retention_factor->riboflavin)  : 0,
                "niacin"=> $food->niacin != null ? $food->niacin * (!is_object($retention_factor) ? 1 : $retention_factor->niacin)  : 0,
                "vitamin_b6"=> $food->vitamin_b6 != null ? $food->vitamin_b6 * (!is_object($retention_factor) ? 1 : $retention_factor->vitamin_b6)  : 0,
                "folic_acid"=> $food->folic_acid != null ? $food->folic_acid * (!is_object($retention_factor) ? 1 : $retention_factor->folic_acid)  : 0,
                "vitamin_b12"=> $food->vitamin_b12 != null ? $food->vitamin_b12 * (!is_object($retention_factor) ? 1 : $retention_factor->vitamin_b12)  : 0,
                "pantothenate"=> $food->pantothenate != null ? $food->pantothenate * (!is_object($retention_factor) ? 1 : $retention_factor->pantothenate)  : 0,
                "biotin"=> $food->biotin != null ? $food->biotin * (!is_object($retention_factor) ? 1 : $retention_factor->biotin)  : 0,
                "vitamin_c"=> $food->vitamin_c != null ? $food->vitamin_c * (!is_object($retention_factor) ? 1 : $retention_factor->vitamin_c)  : 0,
                "vitamin_d"=> $food->vitamin_d != null ? $food->vitamin_d * (!is_object($retention_factor) ? 1 : $retention_factor->vitamin_d)  : 0,
                "vitamin_e"=> $food->vitamin_e != null ? $food->vitamin_e * (!is_object($retention_factor) ? 1 : $retention_factor->vitamin_e)  : 0,
            ];
        }

        //declare results object
        $final_cooked_weight = $request->final_cooked_weight;
        $initial_weight = 0;
        $results = [
            "moisture"=>0,
            "energy_kcal"=>0,
            "energy_kj"=>0,
            "nitrogen"=>0,
            "protein"=>0,
            "fats"=>0,
            "saturated_fa"=>0,
            "monounsaturated_fa"=>0,
            "polyunsaturated_fa"=>0,
            "cholesterol"=>0,
            "cho_udb"=>0,
            "cho_avail"=>0,
            "sugars"=>0,
            "added_sugar"=>0,
            "fibre"=>0,
            "starch"=>0,
            "ash"=>0,
            "mn"=>0,
            "i"=>0,
            "se"=>0,
            "vitamin_a_re"=>0,
            "phytic_acid"=>0,

            //corrected by retention factors
            "ca"=>0,
            "fe"=>0,
            "mg"=>0,
            "p"=>0,
            "k"=>0,
            "na"=>0,
            "zn"=>0,
            "cu"=>0,
            "vitamin_a_rae"=>0,
            "thiamin"=>0,
            "riboflavin"=>0,
            "niacin"=>0,
            "vitamin_b6"=>0,
            "folic_acid"=>0,
            "vitamin_b12"=>0,
            "pantothenate"=>0,
            "biotin"=>0,
            "vitamin_c"=>0,
            "vitamin_d"=>0,
            "vitamin_e"=>0,
        ];

        //calculate nutrients to match grams submitted
        foreach ($ingredients as $ingredient){
            $initial_weight += $ingredient["weight"];
            $results["moisture"] += floatval($ingredient["moisture"]) * floatval($ingredient["weight"]) / 100;
            $results["energy_kcal"] += floatval($ingredient["energy_kcal"]) * floatval($ingredient["weight"]) / 100;
            $results["energy_kj"] += floatval($ingredient["energy_kj"]) * floatval($ingredient["weight"]) / 100;
            $results["nitrogen"] += floatval($ingredient["nitrogen"]) * floatval($ingredient["weight"]) / 100;
            $results["protein"] += floatval($ingredient["protein"]) * floatval($ingredient["weight"]) / 100;
            $results["fats"] += floatval($ingredient["fats"]) * floatval($ingredient["weight"]) / 100;
            $results["saturated_fa"] += floatval($ingredient["saturated_fa"]) * floatval($ingredient["weight"]) / 100;
            $results["monounsaturated_fa"] += floatval($ingredient["monounsaturated_fa"]) * floatval($ingredient["weight"]) / 100;
            $results["polyunsaturated_fa"] += floatval($ingredient["polyunsaturated_fa"]) * floatval($ingredient["weight"]) / 100;
            $results["cholesterol"] += floatval($ingredient["cholesterol"]) * floatval($ingredient["weight"]) / 100;
            $results["cho_udb"] += floatval($ingredient["cho_udb"]) * floatval($ingredient["weight"]) / 100;
            $results["cho_avail"] += floatval($ingredient["cho_avail"]) * floatval($ingredient["weight"]) / 100;
            $results["sugars"] += floatval($ingredient["sugars"]) * floatval($ingredient["weight"]) / 100;
            $results["added_sugar"] += floatval($ingredient["added_sugar"]) * floatval($ingredient["weight"]) / 100;
            $results["fibre"] += floatval($ingredient["fibre"]) * floatval($ingredient["weight"]) / 100;
            $results["starch"] += floatval($ingredient["starch"]) * floatval($ingredient["weight"]) / 100;
            $results["ash"] += floatval($ingredient["ash"]) * floatval($ingredient["weight"]) / 100;
            $results["mn"] += floatval($ingredient["mn"]) * floatval($ingredient["weight"]) / 100;
            $results["i"] += floatval($ingredient["i"]) * floatval($ingredient["weight"]) / 100;
            $results["se"] += floatval($ingredient["se"]) * floatval($ingredient["weight"]) / 100;
            $results["vitamin_a_re"] += floatval($ingredient["vitamin_a_re"]) * floatval($ingredient["weight"]) / 100;
            $results["phytic_acid"] += floatval($ingredient["phytic_acid"]) * floatval($ingredient["weight"]) / 100;
            $results["ca"] += floatval($ingredient["ca"]) * floatval($ingredient["weight"]) / 100;
            $results["fe"] += floatval($ingredient["fe"]) * floatval($ingredient["weight"]) / 100;
            $results["mg"] += floatval($ingredient["mg"]) * floatval($ingredient["weight"]) / 100;
            $results["p"] += floatval($ingredient["p"]) * floatval($ingredient["weight"]) / 100;
            $results["k"] += floatval($ingredient["k"]) * floatval($ingredient["weight"]) / 100;
            $results["na"] += floatval($ingredient["na"]) * floatval($ingredient["weight"]) / 100;
            $results["zn"] += floatval($ingredient["zn"]) * floatval($ingredient["weight"]) / 100;
            $results["cu"] += floatval($ingredient["cu"]) * floatval($ingredient["weight"]) / 100;
            $results["vitamin_a_rae"] += floatval($ingredient["vitamin_a_rae"]) * floatval($ingredient["weight"]) / 100;
            $results["thiamin"] += floatval($ingredient["thiamin"]) * floatval($ingredient["weight"]) / 100;
            $results["riboflavin"] += floatval($ingredient["riboflavin"]) * floatval($ingredient["weight"]) / 100;
            $results["niacin"] += floatval($ingredient["niacin"]) * floatval($ingredient["weight"]) / 100;
            $results["vitamin_b6"] += floatval($ingredient["vitamin_b6"]) * floatval($ingredient["weight"]) / 100;
            $results["folic_acid"] += floatval($ingredient["folic_acid"]) * floatval($ingredient["weight"]) / 100;
            $results["vitamin_b12"] += floatval($ingredient["vitamin_b12"]) * floatval($ingredient["weight"]) / 100;
            $results["pantothenate"] += floatval($ingredient["pantothenate"]) * floatval($ingredient["weight"]) / 100;
            $results["biotin"] += floatval($ingredient["biotin"]) * floatval($ingredient["weight"]) / 100;
            $results["vitamin_c"] += floatval($ingredient["vitamin_c"]) * floatval($ingredient["weight"]) / 100;
            $results["vitamin_d"] += floatval($ingredient["vitamin_d"]) * floatval($ingredient["weight"]) / 100;
            $results["vitamin_e"] += floatval($ingredient["vitamin_e"]) * floatval($ingredient["weight"]) / 100;
        }

        //calculate nutrients as a fraction of final weight served by 100 grams
        $results["moisture"] = (($results["moisture"] - ($initial_weight - $final_cooked_weight)) / $final_cooked_weight) * 100;
        $results["energy_kcal"] = ($results["energy_kcal"] / $final_cooked_weight) * 100;
        $results["energy_kj"] = ($results["energy_kj"] / $final_cooked_weight) * 100;
        $results["nitrogen"] = ($results["nitrogen"] / $final_cooked_weight) * 100;
        $results["protein"] = ($results["protein"] / $final_cooked_weight) * 100;
        $results["fats"] = ($results["fats"] / $final_cooked_weight) * 100;
        $results["saturated_fa"] = ($results["saturated_fa"] / $final_cooked_weight) * 100;
        $results["monounsaturated_fa"] = ($results["monounsaturated_fa"] / $final_cooked_weight) * 100;
        $results["polyunsaturated_fa"] = ($results["polyunsaturated_fa"] / $final_cooked_weight) * 100;
        $results["cholesterol"] = ($results["cholesterol"] / $final_cooked_weight) * 100;
        $results["cho_udb"] = ($results["cho_udb"] / $final_cooked_weight) * 100;
        $results["cho_avail"] = ($results["cho_avail"] / $final_cooked_weight) * 100;
        $results["sugars"] = ($results["sugars"] / $final_cooked_weight) * 100;
        $results["added_sugar"] = ($results["added_sugar"] / $final_cooked_weight) * 100;
        $results["fibre"] = ($results["fibre"] / $final_cooked_weight) * 100;
        $results["starch"] = ($results["starch"] / $final_cooked_weight) * 100;
        $results["ash"] = ($results["ash"] / $final_cooked_weight) * 100;
        $results["mn"] = ($results["mn"] / $final_cooked_weight) * 100;
        $results["i"] = ($results["i"] / $final_cooked_weight) * 100;
        $results["se"] = ($results["se"] / $final_cooked_weight) * 100;
        $results["vitamin_a_re"] = ($results["vitamin_a_re"] / $final_cooked_weight) * 100;
        $results["phytic_acid"] = ($results["phytic_acid"] / $final_cooked_weight) * 100;
        $results["ca"] = ($results["ca"] / $final_cooked_weight) * 100;
        $results["fe"] = ($results["fe"] / $final_cooked_weight) * 100;
        $results["mg"] = ($results["mg"] / $final_cooked_weight) * 100;
        $results["p"] = ($results["p"] / $final_cooked_weight) * 100;
        $results["k"] = ($results["k"] / $final_cooked_weight) * 100;
        $results["na"] = ($results["na"] / $final_cooked_weight) * 100;
        $results["zn"] = ($results["zn"] / $final_cooked_weight) * 100;
        $results["cu"] = ($results["cu"] / $final_cooked_weight) * 100;
        $results["vitamin_a_rae"] = ($results["vitamin_a_rae"] / $final_cooked_weight) * 100;
        $results["thiamin"] = ($results["thiamin"] / $final_cooked_weight) * 100;
        $results["riboflavin"] = ($results["riboflavin"] / $final_cooked_weight) * 100;
        $results["niacin"] = ($results["niacin"] / $final_cooked_weight) * 100;
        $results["vitamin_b6"] = ($results["vitamin_b6"] / $final_cooked_weight) * 100;
        $results["folic_acid"] = ($results["folic_acid"] / $final_cooked_weight) * 100;
        $results["vitamin_b12"] = ($results["vitamin_b12"] / $final_cooked_weight) * 100;
        $results["pantothenate"] = ($results["pantothenate"] / $final_cooked_weight) * 100;
        $results["biotin"] = ($results["biotin"] / $final_cooked_weight) * 100;
        $results["vitamin_c"] = ($results["vitamin_c"] / $final_cooked_weight) * 100;
        $results["vitamin_d"] = ($results["vitamin_d"] / $final_cooked_weight) * 100;
        $results["vitamin_e"] = ($results["vitamin_e"] / $final_cooked_weight) * 100;

            //save results
        $recipe = Recipe::create([
            "user_id"                   =>Auth::id(),
            "user_name"                 =>$user_name,
            "user_email"                =>$user_email,
            "name"                      =>$request->name,
            "initial_weight"            =>$initial_weight,
            "final_cooked_weight"       =>$final_cooked_weight,
            "ingredients"               =>json_encode($request->ingredients),

            //nutrients
            "sum_of_proximates"         =>$results["moisture"] + $results["protein"] + $results["fats"] + $results["cho_avail"] + $results["fibre"] + $results["ash"],
            "moisture"                  =>$results["moisture"],
            "energy_kcal"               =>($results["protein"]*4) + ($results["fats"]*9) + ($results["cho_avail"]*4) + ($results["fibre"]*2),
            "energy_kj"                 =>($results["protein"]*17) + ($results["fats"]*37) + ($results["cho_avail"]*17) + ($results["fibre"]*8),
            "nitrogen"                  =>$results["nitrogen"],
            "protein"                   =>$results["protein"],
            "fats"                      =>$results["fats"],
            "saturated_fa"              =>$results["saturated_fa"],
            "monounsaturated_fa"        =>$results["monounsaturated_fa"],
            "polyunsaturated_fa"        =>$results["polyunsaturated_fa"],
            "cholesterol"               =>$results["cholesterol"],
            "cho_udb"                   =>$results["cho_udb"],
            "cho_avail"                 =>$results["cho_avail"],
            "sugars"                    =>$results["sugars"],
            "added_sugar"               =>$results["added_sugar"],
            "fibre"                     =>$results["fibre"],
            "starch"                    =>$results["starch"],
            "ash"                       =>$results["ash"],
            "mn"                        =>$results["mn"],
            "i"                         =>$results["i"],
            "se"                        =>$results["se"],
            "vitamin_a_re"              =>$results["vitamin_a_re"],
            "phytic_acid"               =>$results["phytic_acid"],
            "ca"                        =>$results["ca"],
            "fe"                        =>$results["fe"],
            "mg"                        =>$results["mg"],
            "p"                         =>$results["p"],
            "k"                         =>$results["k"],
            "na"                        =>$results["na"],
            "zn"                        =>$results["zn"],
            "cu"                        =>$results["cu"],
            "vitamin_a_rae"             =>$results["vitamin_a_rae"],
            "thiamin"                   =>$results["thiamin"],
            "riboflavin"                =>$results["riboflavin"],
            "niacin"                    =>$results["niacin"],
            "vitamin_b6"                =>$results["vitamin_b6"],
            "folic_acid"                =>$results["folic_acid"],
            "vitamin_b12"               =>$results["vitamin_b12"],
            "pantothenate"              =>$results["pantothenate"],
            "biotin"                    =>$results["biotin"],
            "vitamin_c"                 =>$results["vitamin_c"],
            "vitamin_d"                 =>$results["vitamin_d"],
            "vitamin_e"                 =>$results["vitamin_e"],
        ]);

        try{
            Mail::to($request->user_email)->send(new GeneratedRecipeMail($recipe, $request->user_name));
        }catch(GuzzleException $e){

        }

//        dump($user_name);
//        dump($user_email);
//        dd((new AppController())->isApi($request));

        if((new AppController())->isApi($request)){
            return response()->json(new RecipeResource($recipe));
        }else{
            return Redirect::back()->with(["success" => "Recipe generated and downloaded! Please check your email as well.",
                "id" => $recipe->id]);
        }
    }

    public function printRecipe($id)
    {
        $recipe = Recipe::findorFail($id);
        $pdf = PDF::loadView('recipe-1', [
            'recipe'         => $recipe->name,
            'user_name'         => $recipe->user_name,
            'yieldFactor'    => ($recipe->final_cooked_weight/$recipe->initial_weight),
            'results'        => new RecipeResource($recipe),
        ]);

        return $pdf->download(strtoupper($recipe->name)." RECIPE.pdf");
    }

    public function generatePDF(Request $request)
    {
        $request->validate([
           'recipe'         => 'required',
           'yieldFactor'    => 'required',
           'results'        => 'required'
        ]);

        $pdf = PDF::loadView('recipe', [
            'recipe'         => $request->recipe,
            'yieldFactor'    => $request->yieldFactor,
            'results'        => $request->results,
        ]);

        return $pdf->download(strtoupper($request->recipe)." RECIPE.pdf");
    }
}
