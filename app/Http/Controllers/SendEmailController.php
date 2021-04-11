<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    //
    function index(){
        return view('send_email');
    }
    function send(Request $request){
        $this->validate($request,[
            'name'  =>  'required',
            'email' =>  'required|email',
            'message'   =>  'required'
        ]);
        $data=array(
            'name' =>$request->name,
            'message'=>$request->message
        );
        Mail::to('alisher.izzatullyev@gmail.com')->send(new SendMail($data));
        return back()->with('success','thanks for contacting us');
    }
}
