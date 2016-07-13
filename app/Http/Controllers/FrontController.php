<?php

namespace acrearmusic\Http\Controllers;

use Illuminate\Http\Request;

use acrearmusic\Http\Requests;

class FrontController extends Controller
{
    public function index()
    {
    	return view('index');
    }
    public function contacto()
    {
    	return view('contacto');	
    }
    public function reviews()
    {
    	return view('reviews');
    }
}
