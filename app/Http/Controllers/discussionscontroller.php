<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\discussions;





class discussionscontroller extends Controller
{
    public function index()
    {
        $discussions = discussions::all()->toArray();
        return view('discussions.index', compact('discussions') );
    }


    public function store(Request $request)
        {
            
            
        $discussion_name=$request->input('discussion_name');      
        $discussion_date=$request->input('discussion_date'); 
        $discussion_time=$request->input('discussion_time');
        $discussion_location=$request->input('discussion_location');
        $discussion_description=$request->input('discussion_description');
         echo DB::insert('insert into discussions(id,discussion_name,discussion_date,discussion_time,discussion_location,discussion_description)values(?,?,?,?,?,?)',
         [null,$discussion_name, $discussion_date,$discussion_time, $discussion_location, $discussion_description]);
         
         $data = discussions::all();
            
         return view('discussions.insert',['data'=>$data]);
        
        }
    
    public function update(Request $request)
       {
           $id = $request->input('id');
        $discussion_name=$request->input('discussion_name');      
        $discussion_date=$request->input('discussion_date'); 
        $discussion_time=$request->input('discussion_time');
        $discussion_location=$request->input('discussion_location');
        $discussion_description=$request->input('discussion_description');
        discussions::where('id',$id)
        ->update(['discussion_name'=>$discussion_name,
            'discussion_date'=>$discussion_date,
        'discussion_time'=>$discussion_time,
        'discussion_location'=>$discussion_location,
        'discussion_description'=>$discussion_description,
       ]);

       $data = discussions::all();
            
       return view('discussions.update',['data'=>$data]);


       }
    
    public function delete(Request $request)
        {
            $id = $request->input('id');
            $discussion_name=$request->input('discussion_name');      
        $discussion_date=$request->input('discussion_date'); 
        $discussion_time=$request->input('discussion_time');
        $discussion_location=$request->input('discussion_location');
        $discussion_description=$request->input('discussion_description');
            discussions::where('id',$id)
            ->delete(['discussion_name'=>$discussion_name,
                'discussion_date'=>$discussion_date,
            'discussion_time'=>$discussion_time,
            'discussion_location'=>$discussion_location,
            'discussion_description'=>$discussion_description,
           ]);
            
           $data = discussions::all();
            
       return view('discussions.delete',['data'=>$data]);
           /*$discussions = discussions::find($request->id);
           $discussions->delete();*/


        }
}