<?php

namespace App\Http\Controllers;

use App\Http\Resources\FoodResource;
use App\Http\Resources\FoodTypeResource;
use App\Http\Resources\GroupResource;
use App\Models\Food;
use App\Models\FoodType;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class AppController extends Controller
{


    public function uploadFile(Request $request)
    {
        $request->validate([
            'file'  => 'required',
        ]);

        $file=$request->file;

        //upload new picture and update database
        $explodedFile=explode(',',$file);
        //$decodedFile=base64_decode($explodedFile[1]);


        //develop name
        $ext=$this->getExtension($explodedFile);
        $filename="images/uploads/".uniqid().".".$ext;

        if($ext=='jpg' || $ext=='png'){
            try{
                Storage::disk('public_uploads')->put(
                    $filename,file_get_contents($file)
                );
            }catch (\RuntimeException $e){
                return response()->json([
                    'message' => "Failed to upload",
                ],501);
            }
        }else {
            return response()->json([
                'message' => "Invalid extension",
            ],415);
        }

        return response()->json([
            'file'      =>  $filename,
            'ext'       =>  $ext
        ]);
    }

    private function getExtension($explodedImage)
    {
        $imageExtensionDecode=explode('/',$explodedImage[0]);
        $imageExtension=explode(';',$imageExtensionDecode[1]);
        $lowercaseExt=strtolower($imageExtension[0]);
        if($lowercaseExt=='jpeg')
            return 'jpg';
        else
            return $lowercaseExt;
    }

    public function uploadImage(Request $request)
    {

        try {
//            $request->validate([
//                'image'=>'mimes:jpeg,png'
//            ]);

            $extension=$request->image->extension();
            $filename=uniqid().".".$extension;
            $request->image->move(public_path("images/sermons"),$filename);

            return response()->json(['url'=>env('APP_URL')."images/sermons/$filename"],200);

        }catch (\RuntimeException $e){
            return response()->json([
                'error' => "The image upload failed",
            ],501);
        }
    }

}
