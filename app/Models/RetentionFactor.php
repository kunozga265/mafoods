<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RetentionFactor extends Model
{
    use HasFactory;

    public function foodType()
    {
        return $this->belongsTo(FoodType::class);
    }

    protected $fillable=[
        "food_type_id",
        "cooking_method",
        "ca",
        "fe",
        "mg",
        "p",
        "k",
        "na",
        "zn",
        "cu",
        "others",
        "vitamin_a_rae",
        "carotenoids",
        "vitamin_d",
        "vitamin_e",
        "vitamin_k",
        "thiamin",
        "riboflavin",
        "niacin",
        "vitamin_b6",
        "folic_acid",
        "vitamin_b12",
        "pantothenate",
        "biotin",
        "vitamin_c"
    ];
}
