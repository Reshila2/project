<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    //
    function index(){
        return view('home');
    }
    function send(Request $request){
        $this->validate($request,[
            'name'  =>  'required',
            'email' =>  'required|email',
            'subject' => 'required',
            'message'   =>  'required'
        ]);
        $data=array(
            'name' =>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
            'subject'=>$request->subject
        );
        Mail::to('alisher.izzatullyev@gmail.com')->send(new SendMail($data));
        return back()->with('success','thanks for contacting us');
    }
}
