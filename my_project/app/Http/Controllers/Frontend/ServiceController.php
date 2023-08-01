<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // services route
    public function services(){
        $data = Service::all();
        return view('frontend.services.service',compact('data'));
    }
    // service_details route
    public function service_details(){
        return view('frontend.services.service-details');
    }
}
