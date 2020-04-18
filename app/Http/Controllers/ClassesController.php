<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function index()
    {
        $data ['result'] = \App\Classes::all();
        return view('classes/index')->with($data);
    }
    public function create()
    {
    	return view('classes/form');
    }
    public function store(Request $request)
    {
    	$input = $request->all();
    	$status = \App\Classes::create($input);

        if ($status) return redirect('admin/classes')->with('success','Data Successfully Added');
        else return redirect('admin/classes')->with('error','Failed Data Added');
    }
    public function edit($id)
    {
        $data['result'] = \App\Classes::where('id_class',$id)->first();
        return view('classes/form')->with($data);
    }
    public function update(Request $request,$id)
    {
        
        // $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\Classes::where('id_class', $id)->first();
        $status = $result->update($input);

        if ($status) return redirect('admin/classes')->with('success','Data Successfully Change');
        else return redirect('admin/classes')->with('error','Data Failed to Change');
    }
    public function destroy(Request $request, $id)
    {
        $result = \App\Classes::where('id_class',$id)->first();
        $status = $result->delete();

        if ($status) return redirect('admin/classes')->with('success','Data Successfully Delete');
        else return redirect('admin/classes')->with('error','Data Failed to Delete');
    }
}
