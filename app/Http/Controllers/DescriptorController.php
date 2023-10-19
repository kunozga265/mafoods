<?php

namespace App\Http\Controllers;

use App\Models\Descriptor;
use Illuminate\Http\Request;

class DescriptorController extends Controller
{
    public function seeder(Request $request)
    {
        foreach ($request->descriptors as $descriptor) {
            $references=[];

            $refs = explode("*",$descriptor["reference"]);
            foreach ($refs as $ref){
                $item = explode("?",$ref);
                $references[]=[
                  "citation"    => $item[0],
                  "full"        => $item[1],
                ];
            }

            Descriptor::create([
                "code"          =>$descriptor["code"],
                "name"          =>$descriptor["name"],
                "description"   =>$descriptor["description"],
                "function"      =>$descriptor["function"],
                "other"         =>$descriptor["other"],
                "references"     =>json_encode($references),
            ]);
        }

        dd("Descriptor Table - Database Seeded");
    }
}
