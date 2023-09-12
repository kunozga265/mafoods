<?php

namespace App\Http\Controllers;

use App\Http\Resources\FoodResource;
use App\Http\Resources\GroupResource;
use App\Models\Food;
use App\Models\Group;
use App\Models\Source;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;
use Inertia\Inertia;

class CompositionTableController extends Controller
{
    public function index()
    {
        $groups=Group::all();
        $foods=Food::orderBy('group_id','asc')->get();
        return Inertia::render('Auth/CompositionTable/Index',[
            'groups'    => GroupResource::collection($groups),
            'foods'    => FoodResource::collection($foods),

        ]);
    }

    public function create()
    {
        $groups=Group::all();
        $sources=Source::all();
        return Inertia::render('Auth/CompositionTable/Create',[
            'groups'    => GroupResource::collection($groups),
            'sources'   => $sources,
        ]);
    }

    public function  store(Request $request)
    {
        $request->validate([
           'item'   => 'required',
           'code'   => ['required','unique:foods'],
           'group'  => 'required',
           'source'  => 'required',
        ]);

        Food::create([
            "code"                  =>$request->code,
            "ref_no"                =>$request->ref_no,
            "item"                  =>$request->item,
            "group_id"              =>$request->group,
            "source_id"              =>$request->source,
            "moisture"              =>$request->moisture,
            "energy_kcal"           =>$request->energy_kcal,
            "energy_kj"             =>$request->energy_kj,
            "nitrogen"              =>$request->nitrogen,
            "protein"               =>$request->protein,
            "fats"                  =>$request->fats,
            "saturated_fa"          =>$request->saturated_fa,
            "monounsaturated_fa"    =>$request->monounsaturated_fa,
            "polyunsaturated_fa"    =>$request->polyunsaturated_fa,
            "cholesterol"           =>$request->cholesterol,
            "cho_udb"               =>$request->cho_udb,
            "cho_avail"             =>$request->cho_avail,
            "sugars"                =>$request->sugars,
            "added_sugar"           =>$request->added_sugar,
            "fibre"                 =>$request->fibre,
            "starch"                =>$request->starch,
            "ash"                   =>$request->ash,
            "ca"                    =>$request->ca,
            "fe"                    =>$request->fe,
            "mg"                    =>$request->mg,
            "p"                     =>$request->p,
            "k"                     =>$request->k,
            "na"                    =>$request->na,
            "zn"                    =>$request->zn,
            "cu"                    =>$request->cu,
            "mn"                    =>$request->mn,
            "i"                     =>$request->i,
            "se"                    =>$request->se,
            "vitamin_a_rae"         =>$request->vitamin_a_rae,
            "vitamin_a_re"          =>$request->vitamin_a_re,
            "thiamin"               =>$request->thiamin,
            "riboflavin"            =>$request->riboflavin,
            "niacin"                =>$request->niacin,
            "vitamin_b6"            =>$request->vitamin_b6,
            "folic_acid"            =>$request->folic_acid,
            "vitamin_b12"           =>$request->vitamin_b12,
            "pantothenate"          =>$request->pantothenate,
            "biotin"                =>$request->biotin,
            "vitamin_c"             =>$request->vitamin_c,
            "vitamin_d"             =>$request->vitamin_d,
            "vitamin_e"             =>$request->vitamin_e,
            "phytic_acid"           =>$request->phytic_acid,
        ]);

        return Redirect::route('admin.composition-table')->with('success','New Food Item added!');
    }

    public function show($code)
    {
        //find out if the request is valid
        $food=Food::where('code',$code)->first();

        if(is_object($food)){
            $groups=Group::all();
             $sources=Source::all();
            return Inertia::render('Auth/CompositionTable/Show',[
                'food'  =>  new FoodResource($food),
                'groups'    => GroupResource::collection($groups),
                'sources'   => $sources,
            ]);

        }else{
            return Redirect::back('admin.composition-table')->with('error', 'Food item not found');
        }

    }

    public function update(Request $request, $code)
    {
        //find out if the request is valid
        $food=Food::where('code',$code)->first();

        if(is_object($food)){
            $request->validate([
                'item'   => 'required',
                'code'   => 'required',
                'group'  => 'required',
                'source'  => 'required',
                Rule::unique('foods')->ignore($code),
            ]);

            $food->update([
                "code"                  =>$request->code,
                "ref_no"                =>$request->ref_no,
                "item"                  =>$request->item,
                "group_id"              =>$request->group,
                "source_id"             =>$request->source,
                "moisture"              =>$request->moisture,
                "energy_kcal"           =>$request->energy_kcal,
                "energy_kj"             =>$request->energy_kj,
                "nitrogen"              =>$request->nitrogen,
                "protein"               =>$request->protein,
                "fats"                  =>$request->fats,
                "saturated_fa"          =>$request->saturated_fa,
                "monounsaturated_fa"    =>$request->monounsaturated_fa,
                "polyunsaturated_fa"    =>$request->polyunsaturated_fa,
                "cholesterol"           =>$request->cholesterol,
                "cho_udb"               =>$request->cho_udb,
                "cho_avail"             =>$request->cho_avail,
                "sugars"                =>$request->sugars,
                "added_sugar"           =>$request->added_sugar,
                "fibre"                 =>$request->fibre,
                "starch"                =>$request->starch,
                "ash"                   =>$request->ash,
                "ca"                    =>$request->ca,
                "fe"                    =>$request->fe,
                "mg"                    =>$request->mg,
                "p"                     =>$request->p,
                "k"                     =>$request->k,
                "na"                    =>$request->na,
                "zn"                    =>$request->zn,
                "cu"                    =>$request->cu,
                "mn"                    =>$request->mn,
                "i"                     =>$request->i,
                "se"                    =>$request->se,
                "vitamin_a_rae"         =>$request->vitamin_a_rae,
                "vitamin_a_re"          =>$request->vitamin_a_re,
                "thiamin"               =>$request->thiamin,
                "riboflavin"            =>$request->riboflavin,
                "niacin"                =>$request->niacin,
                "vitamin_b6"            =>$request->vitamin_b6,
                "folic_acid"            =>$request->folic_acid,
                "vitamin_b12"           =>$request->vitamin_b12,
                "pantothenate"          =>$request->pantothenate,
                "biotin"                =>$request->biotin,
                "vitamin_c"             =>$request->vitamin_c,
                "vitamin_d"             =>$request->vitamin_d,
                "vitamin_e"             =>$request->vitamin_e,
                "phytic_acid"           =>$request->phytic_acid,
            ]);

            return Redirect::route('admin.composition-table')->with('success','Food item updated successfully');

        }else{
            return Redirect::back('admin.composition-table')->with('error','Food item not found');
        }

    }
}
