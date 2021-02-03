<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class iniciodesessioncontroller extends Controller
{
    public function index()
    {
        return view('iniciodesession.index');
    }
}
