<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\teams;




class teamscontroller extends Controller
{
    public function index()
    {
        $teams = teams::all()->toArray();
        return view('teams.index', compact('teams') );
    }


    public function store(Request $request)
        {
            
            
        $team_name=$request->input('team_name');      
        $team_date=$request->input('team_date'); 
        $team_time=$request->input('team_time');
        $team_location=$request->input('team_location');
        $team_description=$request->input('team_description');
         echo DB::insert('insert into teams(id,team_name,team_date,team_time,team_location,team_description)values(?,?,?,?,?,?)',
         [null,$team_name, $team_date,$team_time, $team_location, $team_description]);
         
         $data = teams::all();
            
         return view('teams.insert',['data'=>$data]);
        
        }
    
    public function update(Request $request)
       {
           $id = $request->input('id');
        $team_name=$request->input('team_name');      
        $team_date=$request->input('team_date'); 
        $team_time=$request->input('team_time');
        $team_location=$request->input('team_location');
        $team_description=$request->input('team_description');
        teams::where('id',$id)
        ->update(['team_name'=>$team_name,
            'team_date'=>$team_date,
        'team_time'=>$team_time,
        'team_location'=>$team_location,
        'team_description'=>$team_description,
       ]);

       $data = teams::all();
            
       return view('teams.update',['data'=>$data]);


       }
    
    public function delete(Request $request)
        {
            $id = $request->input('id');
            $team_name=$request->input('team_name');      
        $team_date=$request->input('team_date'); 
        $team_time=$request->input('team_time');
        $team_location=$request->input('team_location');
        $team_description=$request->input('team_description');
            teams::where('id',$id)
            ->delete(['team_name'=>$team_name,
                'team_date'=>$team_date,
            'team_time'=>$team_time,
            'team_location'=>$team_location,
            'team_description'=>$team_description,
           ]);
            
           $data = teams::all();
            
       return view('teams.delete',['data'=>$data]);
           /*$teams = teams::find($request->id);
           $teams->delete();*/


        }
}