<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RecipeResource extends JsonResource
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
            "id"                        =>intval($this->id),
            "name"                      =>$this->name,
            "initial_weight"            =>floatval($this->initial_weight),
            "final_cooked_weight"       =>floatval($this->final_cooked_weight),

            //nutrients
            "sum_of_proximates"         =>floatval(($this->moisture + $this->protein + $this->fats + $this->cho_avail + $this->fibre + $this->ash)),
            "moisture"                  =>floatval($this->moisture),
            "energy_kcal"               =>floatval(($this->protein*4) + ($this->fats*9) + ($this->cho_avail*4) + ($this->fibre*2)),
            "energy_kj"                 =>floatval(($this->protein*17) + ($this->fats*37) + ($this->cho_avail*17) + ($this->fibre*8)),
            "nitrogen"                  =>floatval($this->nitrogen),
            "protein"                   =>floatval($this->protein),
            "fats"                      =>floatval($this->fats),
            "saturated_fa"              =>floatval($this->saturated_fa),
            "monounsaturated_fa"        =>floatval($this->monounsaturated_fa),
            "polyunsaturated_fa"        =>floatval($this->polyunsaturated_fa),
            "cholesterol"               =>floatval($this->cholesterol),
            "cho_udb"                   =>floatval($this->cho_udb),
            "cho_avail"                 =>floatval($this->cho_avail),
            "sugars"                    =>floatval($this->sugars),
            "added_sugar"               =>floatval($this->added_sugar),
            "fibre"                     =>floatval($this->fibre),
            "starch"                    =>floatval($this->starch),
            "ash"                       =>floatval($this->ash),
            "mn"                        =>floatval($this->mn),
            "i"                         =>floatval($this->i),
            "se"                        =>floatval($this->se),
            "vitamin_a_re"              =>floatval($this->vitamin_a_re),
            "phytic_acid"               =>floatval($this->phytic_acid),
            "ca"                        =>floatval($this->ca),
            "fe"                        =>floatval($this->fe),
            "mg"                        =>floatval($this->mg),
            "p"                         =>floatval($this->p),
            "k"                         =>floatval($this->k),
            "na"                        =>floatval($this->na),
            "zn"                        =>floatval($this->zn),
            "cu"                        =>floatval($this->cu),
            "vitamin_a_rae"             =>floatval($this->vitamin_a_rae),
            "thiamin"                   =>floatval($this->thiamin),
            "riboflavin"                =>floatval($this->riboflavin),
            "niacin"                    =>floatval($this->niacin),
            "vitamin_b6"                =>floatval($this->vitamin_b6),
            "folic_acid"                =>floatval($this->folic_acid),
            "vitamin_b12"               =>floatval($this->vitamin_b12),
            "pantothenate"              =>floatval($this->pantothenate),
            "biotin"                    =>floatval($this->biotin),
            "vitamin_c"                 =>floatval($this->vitamin_c),
            "vitamin_d"                 =>floatval($this->vitamin_d),
            "vitamin_e"                 =>floatval($this->vitamin_e),
        ];
    }
}
