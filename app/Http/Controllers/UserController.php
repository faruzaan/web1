<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data ['result'] = \App\User1::all();
        return view('user/index')->with($data);
    }
    public function create()
    {
    	return view('user/form');
    }
    public function store(Request $request)
    {
    	$input = $request->all();
    	$status = \App\User1::create($input);

        if ($status) return redirect('admin/user')->with('success','Data Successfully Added');
        else return redirect('admin/user')->with('error','Failed Data Added');
    }
    public function edit($id)
    {
        $data['result'] = \App\User1::where('id_user',$id)->first();
        return view('admin/user/form')->with($data);
    }
    public function update(Request $request,$id)
    {
        
        // $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\User1::where('id_user', $id)->first();
        $status = $result->update($input);

        if ($status) return redirect('admin/user')->with('success','Data Successfully Change');
        else return redirect('admin/user')->with('error','Data Failed to Change');
    }
    public function destroy(Request $request, $id)
    {
        $result = \App\User1::where('id_user',$id)->first();
        $status = $result->delete();

        if ($status) return redirect('admin/user')->with('success','Data Successfully Delete');
        else return redirect('admin/user')->with('error','Data Failed to Delete');
    }
}
