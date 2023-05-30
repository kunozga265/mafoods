<?php

namespace Database\Seeders;

use App\Models\Download;
use Illuminate\Database\Seeder;

class DownloadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Download::create([
           'name'           => "Malawi Food Composition Table",
           "description"    => "The Government of Malawi (GoM) has developed the first edition of the Malawian Food Composition Table (MFCT) which describes the content of commonly-consumed Malawian food items in terms of their nutrients and energy.",
            "file"          => "files/Malawian Food Composition Table 2019.pdf",
            "image"         => "images/composition-table.jpg"
        ]);
    }
}
