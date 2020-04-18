<?php

namespace App\Http\Controllers;

use App\Contents;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('content.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect('content');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function show(Contents $contents)
    {
        return view('content');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function edit(Contents $contents)
    {
        return redirect('content');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contents $contents)
    {
        return redirect('content');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contents $contents)
    {
        return view('content');
    }
}
