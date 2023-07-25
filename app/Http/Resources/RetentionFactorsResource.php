<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RetentionFactorsResource extends JsonResource
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
            "id"                =>$this->id,
            "food_type"         =>$this->foodType,
            "cooking_method"    =>$this->cooking_method,
            "ca"                =>$this->ca,
            "fe"                =>$this->fe,
            "mg"                =>$this->mg,
            "p"                 =>$this->p,
            "k"                 =>$this->k,
            "na"                =>$this->na,
            "zn"                =>$this->zn,
            "cu"                =>$this->cu,
            "others"            =>$this->others,
            "vitamin_a_rae"     =>$this->vitamin_a_rae,
            "carotenoids"       =>$this->carotenoids,
            "vitamin_d"         =>$this->vitamin_d,
            "vitamin_e"         =>$this->vitamin_e,
            "vitamin_k"         =>$this->vitamin_k,
            "thiamin"           =>$this->thiamin,
            "riboflavin"        =>$this->riboflavin,
            "niacin"            =>$this->niacin,
            "vitamin_b6"        =>$this->vitamin_b6,
            "folic_acid"        =>$this->folic_acid,
            "vitamin_b12"       =>$this->vitamin_b12,
            "pantothenate"      =>$this->pantothenate,
            "biotin"            =>$this->biotin,
            "vitamin_c"         =>$this->vitamin_c,
        ];

    }
}
