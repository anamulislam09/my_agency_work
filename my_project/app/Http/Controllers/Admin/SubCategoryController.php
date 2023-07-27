<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // show subcategory
    public function index()
    {
        $datas = SubCategory::all();
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
}