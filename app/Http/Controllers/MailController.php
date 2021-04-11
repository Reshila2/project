<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public function sendEmail(){
        $details=[
            'name'=>'Mail from ',
            'message'=>'this is for testion'
        ];
        Mail::to("alisher.izzatullyev@gmail.com")->send(new TestMail($details));
        return "Email SENt";
    }
}
