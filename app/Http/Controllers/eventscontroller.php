<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Events;

class eventscontroller extends Controller
{
    public function index()
    {
        $events = Events::all()->toArray();
        return view('admin.index', compact('admin') );
    }


    public function store(Request $request)
        {
            
         
        $event_name=$request->input('event_name');      
        $event_date=$request->input('event_date'); 
        $event_time=$request->input('event_time');
        $event_location=$request->input('event_location');
        $event_description=$request->input('event_description');
         echo DB::insert('insert into events(id,event_name,event_date,event_time,event_location,event_description)values(?,?,?,?,?,?)',
         [null,$event_name, $event_date,$event_time, $event_location, $event_description]);
         
         $data = Events::all();
            
         return view('Events.insert',['data'=>$data]);
        
        }
    
    public function update(Request $request)
       {
        $id=$request->input('id');    
        $event_name=$request->input('event_name');      
        $event_date=$request->input('event_date'); 
        $event_time=$request->input('event_time');
        $event_location=$request->input('event_location');
        $event_description=$request->input('event_description');
        Events::where('id',$id
            )
        ->update(['event_name'=>$event_name,
            'event_date'=>$event_date,
        'event_time'=>$event_time,
        'event_location'=>$event_location,
        'event_description'=>$event_description,
       ]);

       $data = Events::all();
            
       return view('Events.update',['data'=>$data]);


       }
    
    public function delete(Request $request)
        {
         $id=$request->input('id'); 
        $event_name=$request->input('event_name');      
        $event_date=$request->input('event_date'); 
        $event_time=$request->input('event_time');
        $event_location=$request->input('event_location');
        $event_description=$request->input('event_description');
            Events::where('id',$id)
            ->delete(['event_name'=>$event_name,
                'event_date'=>$event_date,
            'event_time'=>$event_time,
            'event_location'=>$event_location,
            'event_description'=>$event_description,
           ]);
            
           $data = Events::all();
            
       return view('Events.delete',['data'=>$data]);
           /*$events = Events::find($request->id);
           $events->delete();*/


        }
}