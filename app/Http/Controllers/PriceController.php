<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        $data ['result'] = \App\Price::all();
        return view('price/index')->with($data);
    }
    public function create()
    {
    	return view('price/form');
    }
    public function store(Request $request)
    {
    	$input = $request->all();
    	$status = \App\Price::create($input);

        if ($status) return redirect('admin/price')->with('success','Data Successfully Added');
        else return redirect('admin/price')->with('error','Failed Data Added');
    }
    public function edit($id)
    {
        $data['result'] = \App\Price::where('id',$id)->first();
        return view('admin/price/form')->with($data);
    }
    public function update(Request $request,$id)
    {
        
        // $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\Price::where('id', $id)->first();
        $status = $result->update($input);

        if ($status) return redirect('admin/price')->with('success','Data Successfully Change');
        else return redirect('admin/price')->with('error','Data Failed to Change');
    }
    public function destroy(Request $request, $id)
    {
        $result = \App\Price::where('id',$id)->first();
        $status = $result->delete();

        if ($status) return redirect('admin/price')->with('success','Data Successfully Delete');
        else return redirect('admin/price')->with('error','Data Failed to Delete');
    }
}
