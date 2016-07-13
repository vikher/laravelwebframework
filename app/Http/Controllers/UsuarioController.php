<?php

namespace acrearmusic\Http\Controllers;

use Illuminate\Http\Request;

use acrearmusic\Http\Requests;

class UsuarioController extends Controller
{
    public function create()
    {
    	return view('usuario.create');
    }
    public function store()
    {
    	return "aki esto";
    }
}
