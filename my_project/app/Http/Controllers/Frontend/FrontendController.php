<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // home route
    public function frontend(){
        return view('frontend.home');
    }
    // about route
    public function about(){
        return view('frontend.about');
    }

    // contact route
    public function contact(){
        return view('frontend.contact');
    }

}
