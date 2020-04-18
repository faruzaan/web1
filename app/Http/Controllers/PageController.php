<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
    	return view('home');
    }
    public function login()
    {
    	return view('login');
    }
    public function user()
    {
    	return view('user');
    }
}
