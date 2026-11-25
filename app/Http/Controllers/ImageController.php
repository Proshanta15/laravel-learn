<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    //

    function upload(Request $request){
        $path = $request->file('file')->store('uploads', 'public');
        $pathArray = explode('/',$path);
        $imgPath = $pathArray[1];

        $img= new Image();
        $img->path=$imgPath;
        if($img->save()){
            return redirect('display');
        }else{
            return "Upload failed";
        }
    }

    function list(){
        $images = Image::all();
        return view('display',["imgData"=>$images]);
    }
}
