<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id -> 1
        Group::create([
            'name'  => "Staples",
            'image' => "images/groups/staples.jpg"
        ]);

        //id -> 2
        Group::create([
            'name'  => "Legumes",
            'image' => "images/groups/legumes.jpg"
        ]);

        //id -> 3
        Group::create([
            'name'  => "Animal Source Foods",
            'image' => "images/groups/animals.jpg"
        ]);

        //id -> 4
        Group::create([
            'name'  => "Vegetables",
            'image' => "images/groups/vegetables.jpg"
        ]);

        //id -> 5
        Group::create([
            'name'  => "Fruits",
            'image' => "images/groups/fruits.jpg"
        ]);

        //id -> 6
        Group::create([
            'name'  => "Fats and oils",
            'image' => "images/groups/fats.jpg"
        ]);

        //id -> 7
        Group::create([
            'name'  => "Baby Foods",
            'image' => "images/groups/baby_foods.jpg"
        ]);

        //id -> 8
        Group::create([
            'name'  => "Miscellaneous",
            'image' => "images/groups/miscellaneous.jpg"
        ]);
    }
}
