<?php

namespace App\Http\Controllers;

use App\Http\Resources\RetentionFactorsResource;
use App\Models\RetentionFactor;
use Illuminate\Http\Request;

class RetentionFactorController extends Controller
{
    public function index()
    {
        $retentionFactors=RetentionFactor::all();
        return response()->json(RetentionFactorsResource::collection($retentionFactors));
    }

    public function seeder(Request $request)
    {
        foreach ($request->retention_factors as $retention_factor) {
            RetentionFactor::create([
                "food_type_id"          =>$retention_factor["food_type_id"],
                "cooking_method"        =>$retention_factor["cooking_method"],
                "ca"                    =>$retention_factor["ca"],
                "fe"                    =>$retention_factor["fe"],
                "mg"                    =>$retention_factor["mg"],
                "p"                     =>$retention_factor["p"],
                "k"                     =>$retention_factor["k"],
                "na"                    =>$retention_factor["na"],
                "zn"                    =>$retention_factor["zn"],
                "cu"                    =>$retention_factor["cu"],
                "others"                =>$retention_factor["others"],
                "vitamin_a_rae"         =>$retention_factor["vitamin_a_rae"],
                "carotenoids"           =>$retention_factor["carotenoids"],
                "vitamin_d"             =>$retention_factor["vitamin_d"],
                "vitamin_e"             =>$retention_factor["vitamin_e"],
                "vitamin_k"             =>$retention_factor["vitamin_k"],
                "thiamin"               =>$retention_factor["thiamin"],
                "riboflavin"            =>$retention_factor["riboflavin"],
                "niacin"                =>$retention_factor["niacin"],
                "vitamin_b6"            =>$retention_factor["vitamin_b6"],
                "folic_acid"            =>$retention_factor["folic_acid"],
                "vitamin_b12"           =>$retention_factor["vitamin_b12"],
                "pantothenate"          =>$retention_factor["pantothenate"],
                "biotin"                =>$retention_factor["biotin"],
                "vitamin_c"             =>$retention_factor["vitamin_c"],
            ]);
        }

        dd("Database Seeded");

    }
}
