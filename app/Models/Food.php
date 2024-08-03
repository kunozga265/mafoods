<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';
    use HasFactory;

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function source()
    {
        return $this->belongsTo(Source::class);
    }

    protected $fillable=[
        "code",
        "ref_no",
        "item",
        "translation",
        "group_id",
        "source_id",
        "moisture",
        "energy_kcal",
        "energy_kj",
        "nitrogen",
        "protein",
        "fats",
        "saturated_fa",
        "monounsaturated_fa",
        "polyunsaturated_fa",
        "cholesterol",
        "cho_udb",
        "cho_avail",
        "sugars",
        "added_sugar",
        "fibre",
        "starch",
        "ash",
        "ca",
        "fe",
        "mg",
        "p",
        "k",
        "na",
        "zn",
        "cu",
        "mn",
        "i",
        "se",
        "vitamin_a_rae",
        "vitamin_a_re",
        "thiamin",
        "riboflavin",
        "niacin",
        "vitamin_b6",
        "folic_acid",
        "vitamin_b12",
        "pantothenate",
        "biotin",
        "vitamin_c",
        "vitamin_d",
        "vitamin_e",
        "phytic_acid",
    ];
}
