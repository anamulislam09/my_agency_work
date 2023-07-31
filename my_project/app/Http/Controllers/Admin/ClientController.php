<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // show Client
    public function index()
    {
        $datas = Client::all();
        return view('admin.client.index', compact('datas'));
    }
}
