<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Mail;
 use App\subscribe;
 use Illuminate\Support\Facades\Auth;
 
use Illuminate\Validation\Rules\Unique;


 

 
 


 class subscribecontroller extends Controller
{
    public function index()
    {
        return view('error.index');
    }

    public function store(Request $request)
    {
       
        $this->validate(request(), [
            
            'subscribe' => 'required|unique:subscribe,subscribe',
          
            
        ]);

        
        
        $subscription = subscribe::create(request(['subscribe']));
       
        $subscribe=$request->input('subscribe');
        $data1=DB::select('select * from subscribe where subscribe=? ', [$subscribe]);
        
       
            
        echo("Subscribed Succesufully");
        
        
        $to_email=$subscribe;
        $data=array("name"=>"Subscribed Succesfully","body"=>"You are now subscribed!");
        Mail::send('mail',$data,function($message) use($to_email)
        {
            $message->to($to_email)->subject('Subscription form');
            $message->from('ciudad.gente@gmail.com','Ciudad Gente');
        });    
        
        auth()->login($subscription);
        

    }
}