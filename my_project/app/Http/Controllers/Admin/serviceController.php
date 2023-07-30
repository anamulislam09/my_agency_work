<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class serviceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // show Services
    public function index(){
        // using querybuilder
            // $datas = DB::table('services')->leftJoin('categories','sub_categories.category_id','categories.id')->select('sub_categories.*','categories.category_name')->get();

            $datas = Service::all();
            return view('admin.category.services.index', compact('datas'));
        }
}
