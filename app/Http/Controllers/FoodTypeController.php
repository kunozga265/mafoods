<?php

namespace App\Http\Controllers;

use App\Http\Resources\FoodTypeResource;
use App\Models\FoodType;
use Illuminate\Http\Request;

class FoodTypeController extends Controller
{
    public function index()
    {
        $foodTypes= FoodType::all();

        return response()->json($foodTypes);
    }
    public function seeder(Request $request)
    {
        foreach ($request->food_types as $type) {
            FoodType::create([
                "item"      =>$type["item"],
                "group"     =>$type["group"],
            ]);
        }

        dd("Database Seeded");

    }
}
