<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Events;
use App\discussions;
use App\teams;

class viewtables extends Controller
{
public function viewevents()
{
    $data = Events::all();
            
   return view('view.events',['data'=>$data]);
   
}

public function viewdiscussions()
{
    $data = discussions::all(); 
            
    return view('view.discussions',['data'=>$data]);
}
public function viewteams()
{
    $data = teams::all();
            
    return view('view.teams',['data'=>$data]);
}
}
