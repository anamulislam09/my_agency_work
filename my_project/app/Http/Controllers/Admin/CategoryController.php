<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Show Service category
    public function index()
    {
        $datas = Category::paginate(3);
        return view('admin.category.service_category.index', compact('datas'));
        // echo "Hello";
    }

    // Add Service category
    public function create()
    {
        return view('admin.category.service_category.create');
    }

    // store Service category
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ]);

        // using query builder
        // $data = array();
        // $data['category_name'] = $request->category_name;
        // $data['category_slug'] = Str::slug($request->category_name, '-');
        // DB::table('categories')->insert($data);

        // using eloquent orm
        Category::insert([
            'category_name' => $request->category_name,
            'category_slug' => Str::slug($request->category_name, '-'),
        ]);
        return redirect()->route('category.index');
    }

    // category edit method 
    public function edit($id)
    {
        // using query builder 
        // $data = DB::table('categories')->where('id', $id)->first();

        // using eloquent orm 
        $data = Category::findOrFail($id);
        return response()->json($data);
    }
    // category edit method 
    public function update(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ]);
        $id = $request->id;
        // using queryBuilder 
        // $data = array();
        // $data['category_name'] = $request->category_name;
        // $data['category_slug'] = Str::slug($request->category_name, '-');
        // DB::table('categories')->where("id", $id)->update($data);

        // Using Querybuilder 
        $data = Category::findOrFail($id);
        $data->update([
            'category_name' => $request->category_name,
            'category_slug' => Str::slug($request->category_name, '-'),
        ]);
        return redirect()->route('category.index');
    }


    public function destroy($id)
    {
        // using query builder 
        // DB::table('categories')->where('id', $id)->delete();
        // Using Eloquent Orm 

        // Using querybuilder 
        $data = Category::findOrFail($id);
        $data->delete();
        return redirect()->route('category.index');
    }
}
