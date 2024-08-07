<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\DescriptorResource;
use App\Http\Resources\FoodResource;
use App\Http\Resources\FoodTypeResource;
use App\Http\Resources\RetentionFactorsResource;
use App\Models\Descriptor;
use App\Models\Food;
use App\Models\FoodType;
use App\Models\Group;
use App\Models\Page;
use App\Models\RetentionFactor;
use App\Models\Source;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        $foodTypes= FoodType::all();
        $retentionFactors=RetentionFactor::all();
        $groups=Group::all();
        $sources=Source::all();
        $descriptors=Descriptor::all();

        return response()->json([
            'foods' => FoodResource::collection($foods),
            'foods_types' => $foodTypes,
            'retention_factors' => RetentionFactorsResource::collection($retentionFactors),
            'groups' => $groups,
            'sources' => $sources,
            'descriptors' => DescriptorResource::collection($descriptors),
        ]);
    }

    public function aboutUs()
    {
        $page = Page::where('name', 'project_overview')->first();
        $contents = json_decode($page->contents);
        return response()->json([
            "content" => $contents->project_overview_main_text
        ]);
    }
}
