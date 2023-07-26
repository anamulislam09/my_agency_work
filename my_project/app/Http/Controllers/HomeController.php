<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        // $this->middleware('is_admin');
    }

    // admin after login
    public function admin(){
        return view('admin.home');
    }
}
