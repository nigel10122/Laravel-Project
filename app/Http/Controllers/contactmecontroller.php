<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;



class contactmecontroller extends Controller
{
    public function store(Request $request)
        {
            
            
        $contact_number=$request->input('contact_number');      
        $contact_email=$request->input('contact_email'); 
        $contact_issue=$request->input('contact_issue');
        $contact_description=$request->input('contact_description');
        
         echo DB::insert('insert into contactme(id,contact_number,contact_email,contact_issue,contact_description)values(?,?,?,?,?)',
         [null,$contact_number, $contact_email,$contact_issue, $contact_description]);

         echo("You will be contacted shortly");
         $contact_email=$request->input('contact_email');
         $data1=DB::select('select * from contactme where contact_email=? ', [$contact_email]);
        
         $to_email=$contact_email;
         $data=array("name"=>"Conact Form Recieved","body"=>"We have recieved your contact info, will contact you shortly");
         Mail::send('mail',$data,function($message) use($to_email)
         {
             $message->to($to_email)->subject('Contact Form');
             $message->from('ciudad.gente@gmail.com','Ciudad Gente');
         });    

}
}