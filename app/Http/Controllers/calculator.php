<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculator extends Controller
{
    //
    public function operation($number1,$sign,$number2){
        // if($sign='+'){
        //     $result=$number1+$number2;
        //     return view('user',['result'=>$result]);
        // }
        switch ($sign){

         
            case '+';
            $result=$number1+$number2;
            return view('user',['result'=>$result]);
            break;
            case '-';
            $result=$number1-$number2;
            return view('user',['result'=>$result]);
            break;
            
        }

    }
}
