<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // show Member list
    public function index()
    {
        $datas = Member::all();
        // using querybuilder
        $datas = DB::table('members')->leftJoin('designations','members.designation_id','designations.id')->select('members.*','designations.designation_name')->get();
        return view('admin.teams.index', compact('datas'));
    }

    // create Member
    public function create()
    {
        $datas = Designation::all();
        return view('admin.teams.create', compact('datas'));
    }

    // store members
    public function store(Request $request)
    {

        //  dd($request->name);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|max:55|unique:members',
            'phone' => 'required ',
            'self_info' => 'required ',
            'address' => 'required ',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'designation_id' => 'required',
        ]);


        // Image upload start here
        $image = $request->file('image');
        $img_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $request->image->move(public_path('upload'), $img_name);
        $img_url = 'upload/' . $img_name;

        Member::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'self_info' => $request->self_info,
            'address' => $request->address,
            'designation_id' => $request->designation_id,
            'image' => $img_url,
        ]);
        return redirect()->route('member.index')->with('msg', 'Member Added successfully');
    }

     // team member edit method
     public function edit($id)
     {
         // using query builder
         // $data = DB::table('Designation')->where('id', $id)->first();

         // using eloquent orm
         $data = Member::findOrFail($id);
         $deg = Designation::all();
         return response()->json($data);
         // return response()->json([$data, $deg]);
     }


      // update members
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|max:55',
            'phone' => 'required ',
            'self_info' => 'required ',
            'address' => 'required ',

        ]);

        $id = $request->id;
        $data = Member::findOrFail($id);
        // dd($data);
        $data->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'self_info' => $request->self_info,
            'address' => $request->address,
        ]);
        return redirect()->route('member.index')->with('msg', 'Member Edited successfully');
    }


    public function destroy($id){
        $data = Member::findOrFail($id);
        $data->delete();
        return redirect()->route('member.index')->with('msg', 'Team Member deleted successfully');
    }
}
