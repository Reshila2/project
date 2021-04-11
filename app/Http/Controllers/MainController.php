<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class MainController extends Controller
{
    //
    public function changeLocale($locale){
        session(['locale'=>$locale]);
        App::setLocale($locale);
        // $currentLocale=App::getLocale();
        // dd($currentLocale); 
        // echo "SUC";
        // return redirect('http://localhost/laravel12/public/welcome');
        //  ('http://localhost/laravel12/public/welcome');
        // die();
    } 
    public function send(){
        $objDemo=new \stdClass();
        $objDemo->demo_one='Demo One Vlaue';
        $objDemo->demo_two='Demo Two Value';
        $objDemo->sender='Dauren.Ayazbayev';
        $objDemo->receiver='alisher.izzatullyev';

        Mail::to("alisher.izzatullyev@gmail.com")->send(new DemoEmail($objDemo));

    }
}
