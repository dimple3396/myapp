<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\SendMail;
use App\Post;
use App\Collab;
use App\User;
use DB;
use Illuminate\Support\Facades\Input;

class MailController extends Controller
{
    public function send(Request $request)
    {
        //user
        $usr=Auth::user();
        
        // post id retrive
        $pt=Post::find($request->id);
        

        // post Author user email retrive
        $user=User::find($pt->user_id);

        //email sending data
        $data=array(
            'email'=> $user->email,
            'title'=> $pt->title,
            'name'=> $usr->name,
            'name2'=> $user->name
        );



        $cb=Collab::find($request->id);

        $q1=DB::table('collab')
            ->where(['user_id' => '$usr->id','post_id' => '$pt->id'])
            ->get();


                    if($pt->u_count == 0){
                        return redirect()->back()->with('success', 'Collaborations full');
                    }  
                    else{

                        $collab=new Collab;
                        $collab->post_id=$pt->id;
                        $collab->user_id=$usr->id;
                        $collab->save();

                    //send mail to post user
                    Mail::to($data['email'])->send(new SendMail($data));


                    // retrive email od user login
                    $data['email']=Auth::user()->email;

                    //send mail to logged  user
                    Mail::to($data['email'])->send(new SendMail($data));

                    $pt->decrement('u_count');

                    return redirect()->back()->with('success', 'Thank You for Collaborating. Please check your email.');
                    }
                }

    }





