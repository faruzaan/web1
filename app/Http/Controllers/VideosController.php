<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function index()
    {
        $data ['result'] = \App\Videos::all();
        return view('video/index')->with($data);
    }
    public function create()
    {
    	return view('video/form');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        if($request->hasFile('video'))
        {
            $filename = $input['id_vid'].".".$request->file('video')->getClientOriginalExtension();
            $request->file('video')->storeAs('',$filename);
            $input['video'] = $filename;
        }
    	$status = \App\Videos::create($input);

        if ($status) return redirect('admin/video')->with('success','Data Successfully Added');
        else return redirect('admin/video')->with('error','Failed Data Added');
    }
    public function edit($id)
    {
        $data['result'] = \App\Videos::where('id_vid',$id)->first();
        return view('video/form')->with($data);
    }
    public function update(Request $request,$id)
    {
        
        // $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\Videos::where('id_vid', $id)->first();
        if($request->hasFile('video'))
        {
            $filename = $id.".".$request->file('video')->getClientOriginalExtension();
            $request->file('video')->storeAs('',$filename);
            $input['video'] = $filename;
        }
        $status = $result->update($input);

        if ($status) return redirect('admin/video')->with('success','Data Successfully Change');
        else return redirect('admin/video')->with('error','Data Failed to Change');
    }
    public function destroy(Request $request, $id)
    {
        $result = \App\Videos::where('id_vid',$id)->first();
        $status = $result->delete();

        if ($status) return redirect('admin/video')->with('success','Data Successfully Delete');
        else return redirect('admin/video')->with('error','Data Failed to Delete');
    }
}
