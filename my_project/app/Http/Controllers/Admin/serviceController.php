<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Support\Str;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class serviceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // show Services
    public function index()
    {
        // using querybuilder
        $datas = DB::table('services')
        ->leftJoin('categories', 'services.category_id', 'categories.id')
        ->leftJoin('sub_categories', 'services.subcategory_id', 'sub_categories.id')
        ->select('services.*', 'categories.category_name', 'sub_categories.subcategory_name')
        ->get();

        // $datas = Service::all();
        return view('admin.category.services.index', compact('datas'));
    }

    // create subcategory
    public function create()
    {
        $cats = Category::all();
        $subcats = SubCategory::all();
        return view('admin.category.services.create', compact('cats', 'subcats'));
    }


    // store service
    public function store(Request $request)
    {
//dd($request->file());
        $this->validate($request,[
            'service_name'      => 'required|unique:services|max:255',
            'category_id'       => 'required ',
            'subcategory_id'    => 'required ',
            'service_img'       => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'service_details'   => 'required ',
        ]);

        $category_id = $request->category_id;
        $subcategory_id = $request->subcategory_id;

        // Image upload start here
        $image = $request->file('service_img');
        $img_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload'), $img_name);
        $img_url = 'upload/' . $img_name;

        Service::insert([
            'service_name' => $request->service_name,
            'service_slug' => Str::slug($request->service_name, '-'),
            'service_details' => $request->service_details,
            'category_id' => $category_id,
            'subcategory_id' => $subcategory_id,
            'service_img' => $img_url,
        ]);
        return redirect()->route('service.index')->with('msg', 'Service Added successfully');
    }

    // edit method
    public function edit($id){
        $data = Service::findOrFail($id);
        // dd($data);
        return response()->json($data);
    }


     // Services update method
     public function update(Request $request)
     {
         $request->validate([
            'service_name'      => 'required|unique:services|max:255',
            'service_img'       => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'service_details'   => 'required ',
         ]);
         $id = $request->id;
        // Image upload start here
        $image = $request->file('service_img');
        $img_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload'), $img_name);
        $img_url = 'upload/' . $img_name;


         // Using Querybuilder
         $data = Service::findOrFail($id);
        //  dd($data);
         $data->update([
             'service_name' => $request->service_name,
             'service_slug' => Str::slug($request->service_name, '-'),
             'service_img' => $img_url,
             'service_details' => $request->service_details,
         ]);
         return redirect()->route('service.index')->with('msg', 'Service Updated successfully');
     }


    // destroy method
    public function destroy($id){
        $data = Service::findOrFail($id);
        $data->delete();
        return redirect()->route('service.index')->with('msg', 'Service Deleted successfully');

    }
}
