<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // show subcategory
    public function index(){
    // using querybuilder
        $datas = DB::table('sub_categories')->leftJoin('categories','sub_categories.category_id','categories.id')->select('sub_categories.*','categories.category_name')->get();

        // $datas = SubCategory::all();
        return view('admin.category.service_subcategory.index', compact('datas'));
    }

    // create subcategory
    public function create()
    {
        $datas = Category::all();
        return view('admin.category.service_subcategory.create', compact('datas'));
    }

    // store subcategory
    public function store(Request $request)
    {
        $validated = $request->validate([
            'subcategory_name' => 'required|unique:sub_categories|max:255',
            'category_id' => 'required '
        ]);

        $category_id = $request->category_id;
        $category_name = Category::where('id', $category_id)->value('category_name');

        Subcategory::insert([
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => Str::slug($request->subcategory_name, '-'),
            'category_id' => $category_id,
        ]);
        // Category::where('id', $category_id)->increment('subcategory_count', 1);
        return redirect()->route('subcategory.index')->with('msg', 'Sub Category Added successfully');
    }

    // category edit method
    public function edit($id)
    {
        // using query builder
        // $data = DB::table('categories')->where('id', $id)->first();

        // using eloquent orm
        $data = SubCategory::findOrFail($id);
        $cats = Category::all();
        return response()->json($data);
        // return response()->json([$data, $cats]);
    }

     // category update method
     public function update(Request $request)
     {
         $validated = $request->validate([
             'subcategory_name' => 'required|unique:sub_categories|max:255',
         ]);
         $id = $request->id;
         // using queryBuilder
         // $data = array();
         // $data['category_name'] = $request->category_name;
         // $data['category_slug'] = Str::slug($request->category_name, '-');
         // DB::table('categories')->where("id", $id)->update($data);

         // Using Querybuilder
         $data = SubCategory::findOrFail($id);
         $data->update([
             'subcategory_name' => $request->subcategory_name,
             'subcategory_slug' => Str::slug($request->subcategory_name, '-'),
         ]);
         return redirect()->route('subcategory.index');
     }


    // DESTROY method
    public function destroy($id){
        $data = SubCategory::findOrFail($id);
        $data->delete();
        return redirect()->route('subcategory.index')->with('msg', 'Sub Category deleted successfully');
    }
}
