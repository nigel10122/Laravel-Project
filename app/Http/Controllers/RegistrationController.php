<?php
 
 namespace App\Http\Controllers;
 
 use Illuminate\Http\Request;
 use App\User;
 use Illuminate\Support\Facades\Auth;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Unique;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('error.index');
    }

    public function store(Request $request)
    {
        $messages =['email.required' => 'Email already taken' ];
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'number' => 'required',
            'country' => 'required',
            
        ],$messages);

        
        
        $user = User::create(request(['name', 'email', 'password','number','country','updated_at','created_at']));
       
        $email=$request->input('email');
        $data1=DB::select('select * from users where email=? ', [$email]);
        
       
            
        echo("Registered Succesufully");
        
        
        $to_email=$email;
        $data=array("name"=>"Email Registered","body"=>"You have successfully registered your account");
        Mail::send('mail',$data,function($message) use($to_email)
        {
            $message->to($to_email)->subject('Email Verification');
            $message->from('ciudad.gente@gmail.com','Ciudad Gente');
        });    
        
        
        auth()->login($user);
        
      

       /*if(count($email))
       {
           echo("Email already exists");
       }
       else 
       {
           echo("Registered Succesfully");
       }*/
}
}