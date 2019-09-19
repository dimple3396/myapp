<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Input;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'msg'=>'required',
            'email1'=>'required',
            'name'=>'required'
        ]);


        $data=array(
            'msg'=>$request->msg,
            'email1'=>$request->email1,
            'name'=>$request->name
        );

     Mail::to($request->input('posts.email'))->send(new SendMail($data));
     return redirect()->back()->with('success', 'Email sent successfully. Check your email.');
    }
}