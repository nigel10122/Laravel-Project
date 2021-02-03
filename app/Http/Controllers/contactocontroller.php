<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactocontroller extends Controller
{
    public function index()
    {
        return view('contacto.index');
    }
}
