<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            "photo" => "images/uploads/news-1.jpg",
            "title" => "USAID - N4H Project Procures A 200l Autoclave Machine for the Food and Nutrition Lab at LUANAR",
            "posted_by" => "Isaac Songola",
            "slug" => Str::slug("USAID - N4H Project Procures A 200l Autoclave Machine for the Food and Nutrition Lab at LUANAR") . date("-Y-m-d"),
            "date" => 1701338400,
            "user_id" => 1,
            "body" => "
<p>            The USAID - Nutrition for Health Activity (N4H) has acquired a 200L  Autoclave  Machine  that will help  in food and nutrition research at LUANAR.</p>

<p>The  industrial-size,  state-of-  the-art  autoclave  machine,  also  known  as a  steam  sterilizer, is  designed to generate and contain high temperature and pressure to kill  microorganisms, ensuring  a sterile environment for laboratory equipment, apparatus, reagents, food, and solutions.</p>

<p>This milestone achievement, has been made possible through the generous support of the USAID funded Leveraging Local Capacity to Strengthen Health Service Delivery Project.</p>

<p>At the helm of this transformative initiative is Principal Investigator (PI) for the N4H project, Associate Professor Dr Tinna Manani who is also the Dean of Faculty of Food and Human Sciences at LUANAR.</p>

<p>Expressing her enthusiasm, she asserts that the newly acquired autoclave will strengthen LUANAR's research and teaching capacity.</p>

<p>*Staff and students can now successfully and easily conduct innovative research that will provide solutions to local food safety challenges, and they will be able to publish their research findings in high impact journals thereby amplifying LUANARs impact,* said Manani.</p>

<p>The autoclave machine has been installed in the Food and Nutrition Laboratory of the Faculty of Food and Humans Sciences at Bunda.</p>

<p>Speaking after installing the machine at Bunda College, Dr Manani said the machine will not only be used by the Faculty of Food and Human Sciences, but also other departments at the university who may need to use it.</p>

<p>\"Scientists from other departments, including the clinic can come to our lab and use this machine if they have materials that need sterilization.\" She added.</p>

<p>Beyond being a mere piece 이 equipment, the 200L Autoclavo Machine is a symbol of LUANAR's commitment to pushing boundaries and leaving an indelible mark on the landscape of scientific discovery and excellence.</p>
"
        ]);
    }
}
