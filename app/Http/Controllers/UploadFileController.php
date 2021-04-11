<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    //
    public function index(){
        return view('file_upload');
    }
    public function showUploadFile(Request $request){
        $file=$request->file('image');

        echo 'File Name '.$file->getClientOriginalName();
        echo '<br>';

        echo 'File Extensions: '.$file->getClientOriginalExtension();
        echo '<br>';
        
        echo 'File Real Path: '.$file ->getRealPath();
        echo '<br>';

        echo 'File size: '.$file->getSize();
        echo '<br>';

        echo 'File mime type: '.$file->getMimeType();

        $destinationPath='uploads';
        $file->move($destinationPath,$file->$_getClientOriginalName());

        
    }
}
