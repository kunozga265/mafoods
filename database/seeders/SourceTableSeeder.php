<?php

namespace Database\Seeders;

use App\Models\Source;
use Illuminate\Database\Seeder;

class SourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Source::create([
            'name' => "Malawian Food"
        ]);
        Source::create([
            'name' => "Malawian Recipe"
        ]);
        Source::create([
            'name' => "Borrowed Food"
        ]);
    }
}
