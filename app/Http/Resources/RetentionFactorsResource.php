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
            "id"                =>intval($this->id),
            "food_type"         =>$this->foodType,
            "cooking_method"    =>$this->cooking_method,
            "ca"                =>floatval($this->ca),
            "fe"                =>floatval($this->fe),
            "mg"                =>floatval($this->mg),
            "p"                 =>floatval($this->p),
            "k"                 =>floatval($this->k),
            "na"                =>floatval($this->na),
            "zn"                =>floatval($this->zn),
            "cu"                =>floatval($this->cu),
            "others"            =>floatval($this->others),
            "vitamin_a_rae"     =>floatval($this->vitamin_a_rae),
            "carotenoids"       =>floatval($this->carotenoids),
            "vitamin_d"         =>floatval($this->vitamin_d),
            "vitamin_e"         =>floatval($this->vitamin_e),
            "vitamin_k"         =>floatval($this->vitamin_k),
            "thiamin"           =>floatval($this->thiamin),
            "riboflavin"        =>floatval($this->riboflavin),
            "niacin"            =>floatval($this->niacin),
            "vitamin_b6"        =>floatval($this->vitamin_b6),
            "folic_acid"        =>floatval($this->folic_acid),
            "vitamin_b12"       =>floatval($this->vitamin_b12),
            "pantothenate"      =>floatval($this->pantothenate),
            "biotin"            =>floatval($this->biotin),
            "vitamin_c"         =>floatval($this->vitamin_c),
        ];

    }
}
