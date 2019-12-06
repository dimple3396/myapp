<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to the CSR Portal!!';
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title',$title);
    }
    public function gallery(){
        $title = 'Gallery';
        return view('pages.services')->with('title',$title);
    }
}
