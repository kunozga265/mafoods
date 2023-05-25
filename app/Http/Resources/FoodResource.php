<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FoodResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id"                    =>$this->id,
            "code"                  =>$this->code,
            "ref_no"                =>$this->ref_no,
            "item"                  =>$this->item,
            "group"                 =>$this->group,
            "source"                =>$this->source,
            "moisture"              =>$this->moisture,
            "energy_kcal"           =>$this->energy_kcal,
            "energy_kj"             =>$this->energy_kj,
            "nitrogen"              =>$this->nitrogen,
            "protein"               =>$this->protein,
            "fats"                  =>$this->fats,
            "saturated_fa"          =>$this->saturated_fa,
            "monounsaturated_fa"   =>$this->monounsaturated_fa,
            "polyunsaturated_fa"    =>$this->polyunsaturated_fa,
            "cholesterol"           =>$this->cholesterol,
            "cho_udb"               =>$this->cho_udb,
            "cho_avail"             =>$this->cho_avail,
            "sugars"                =>$this->sugars,
            "added_sugar"           =>$this->added_sugar,
            "fibre"                 =>$this->fibre,
            "starch"                =>$this->starch,
            "ash"                   =>$this->ash,
            "ca"                    =>$this->ca,
            "fe"                    =>$this->fe,
            "mg"                    =>$this->mg,
            "p"                     =>$this->p,
            "k"                     =>$this->k,
            "na"                    =>$this->na,
            "zn"                    =>$this->zn,
            "cu"                    =>$this->cu,
            "mn"                    =>$this->mn,
            "i"                     =>$this->i,
            "se"                    =>$this->se,
            "vitamin_a_rae"         =>$this->vitamin_a_rae,
            "vitamin_a_re"          =>$this->vitamin_a_re,
            "thiamin"               =>$this->thiamin,
            "riboflavin"            =>$this->riboflavin,
            "niacin"                =>$this->niacin,
            "vitamin_b6"            =>$this->vitamin_b6,
            "folic_acid"            =>$this->folic_acid,
            "vitamin_b12"           =>$this->vitamin_b12,
            "pantothenate"          =>$this->pantothenate,
            "biotin"                =>$this->biotin,
            "vitamin_c"             =>$this->vitamin_c,
            "vitamin_d"             =>$this->vitamin_d,
            "vitamin_e"             =>$this->vitamin_e,
            "phytic_acid"           =>$this->phytic_acid,
        ];
    }
}
