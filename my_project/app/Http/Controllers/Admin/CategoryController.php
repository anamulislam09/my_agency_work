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
        $datas = Category::get();
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
        return redirect()->route('service.index');
    }
}
