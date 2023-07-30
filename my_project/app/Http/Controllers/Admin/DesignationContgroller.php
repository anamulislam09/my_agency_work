<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DesignationContgroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // show designation list 
    public function index(){
        $datas = Designation::get();
        return view('admin.designation.index', compact('datas'));
    }

    // create designation 
    public function create(){
        return view ('admin.designation.create');
    }

    // store designation 
    public function store(Request $request){
         $request->validate([
            'designation_name' => 'required|unique:designations|max:255',

        ]);

        Designation::insert([
            'designation_name' => $request->designation_name,
            'designation_slug' => Str::slug($request->designation_name, '-'),
        ]);
        return redirect()->route('designation.index');

    }
    
    // designation edit method 
    public function edit($id)
    {
        // using query builder 
        // $data = DB::table('categories')->where('id', $id)->first();
        
        // using eloquent orm 
        $data = Designation::findOrFail($id);
        return response()->json($data);
    }

     // category update method 
     public function update(Request $request)
     {
          $request->validate([
             'designation_name' => 'required|unique:designations|max:255',
         ]);
         $id = $request->id;
         $data = Designation::findOrFail($id);
         $data->update([
             'designation_name' => $request->designation_name,
             'designation_slug' => Str::slug($request->designation_name, '-'),
         ]);
         return redirect()->route('designation.index');
     }
 
    
    // destroy method 
    
    public function destroy($id){
        $data = Designation::findOrFail($id);
        $data->delete();
        return redirect()->route('designation.index');
    }
}
