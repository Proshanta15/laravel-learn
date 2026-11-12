<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function upload(Request $request){
       $request->validate([
            'file' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Store image in public disk
        $path = $request->file('file')->store('uploads', 'public');

        $fileNameArray=explode("/", $path);
        $fileName=$fileNameArray[1];

        return view('display-image',['path'=>$fileName]);
    }
}
