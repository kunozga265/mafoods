<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable=[
        "photo",
        "title",
        "slug",
        "body",
        "posted_by",
        "date",
        "user_id",
    ];
}
