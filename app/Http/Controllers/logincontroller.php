<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Location;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class logincontroller extends Controller
{
    public function create()
    {
        return view('iniciodesession.index');
    }

    public function index()
    {
        $user = User::all()->toArray();
        return view('admin.index', compact('admin') );
    }
    
    public function login(request $request)
    {
        session_start();
        $email = $request->input('email');
        $password=$request->input('password');
        $data1=DB::select('select * from users where email=? ', [$email]);
        $data2=DB::select('select * from users where password=?', [ $password]);

        if(count($data1) && count($data2))
        {
            $data = DB::select('select * from users where email=? ', [$email]);
            //return redirect()->to('/admin');
            return view('home.index',['data'=>$data]);

            
            
        }
elseif($email == 'ciudad.gente@gmail.com' && $password == 1234)
{
    $data = DB::select('select * from users where email=? ', [$email]);
    return view('admin.index',['data'=>$data]);
    //return redirect()->to('/admin');
}
elseif(!count($data1))
{
    echo("<h2>Incorrect Email</h2>");
}
elseif(!count($data2))
{
    echo ("<h2>Incorrect Password</h2>");
}
elseif(!count($data1) && !count($data2))
{
echo("<h2>Unable to Log in</h2>");
}
 



    }

    
    
    public function store()
    {
		
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        
        if (auth()->attempt(request(['email', 'password'])) == true) {
            
            echo("Logged in");
            
        }
        
        
        /*return redirect()->to('/iniciodesession');*/
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/iniciodesession');
    }

    /*public function index(Request $req)
    {
        $req->session()->put('data',$req->input());
        return $req-session()->get('data');

    }*/

}