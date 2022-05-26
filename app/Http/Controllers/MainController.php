<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('frontend.home');
    }

    public function aboutus(){
        return view('frontend.aboutus');
    }

    public function programs(){
        return view('frontend.programs');
    }

    public function publications(){
        return view('frontend.publications');
    }

    public function media(){
        return view('frontend.media');
    }

    public function contactus(){
        return view('frontend.contactus');
    }

}