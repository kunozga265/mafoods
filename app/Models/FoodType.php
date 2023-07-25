<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodType extends Model
{
    use HasFactory;

    public function retentionFactors()
    {
        return $this->hasMany(RetentionFactor::class);
    }

    protected $fillable = [
        "item",
        "group",
    ];

    protected $hidden=[
        "created_at",
        "updated_at",
    ];
}
