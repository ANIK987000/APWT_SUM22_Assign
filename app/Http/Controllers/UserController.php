<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\user;

class UserController extends Controller
{
    //

    function welcome()
    {
        return view('other.welcome');
    }
    
    function register()
    {
        return view('other.register');
    }
    function registerPost(Request $req)
    {
        $this->validate($req,
        [
            "name"=>"required|regex:/^[a-zA-Z\s\.\-]+$/i",
            "email"=>"required|email",
            "password"=>"required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/",
            //"type"=>"required"
        ],
        [
            "name.required"=>"Please provide your name",
            "name.regex"=>"Please provide valid name",
            "email.required"=>"Please provide your email",
            "email.regex"=>"Please provide valid email",
            "password.required"=>"Please provide your password",
            "password.regex"=>"Password must contain upper case, lower case, number and special
            characters, minimum length 8 ",

            //"type.required"=>"Provide Your Type"
            
        ]);
        $user=new user();
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=$req->password;
        if($req->type==null)
        {
            $user->type='user'; 
        }
        else
        {
            $user->type=$req->type;
        }
        //$user->type=$req->type;
        $user->save();
        return redirect()->route('other.welcome'); 
    }
    
    function login()
    {
        return view('other.login');
    }
    function loginPost(Request $req)
    {
        
        $this->validate($req,
        [
           
            "email"=>"required|email",
            "password"=>"required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/",

            
        ],
        [
           "email.required"=>"Please provide your email",
            "email.regex"=>"Please provide valid email",
            "password.required"=>"Please provide your password",
            "password.regex"=>"Password is incorrect !!!",
           
            
        ]);
        //  $user= User::where('email','=',$req->email)->where('password','=',$req->password)->get();
        //  return $user;
       
        $user= User::where('email','=',$req->email)->first();
        if($user->password==$req->password)
        {
            if($user->type=="Admin")
            {
                return redirect()->route('other.admin_dashboard');
            }
            else
            {
                return redirect()->route('other.user_dashboard');
            }
        }
        else
        {
            return "Sorry, login failed !!!";
        }
       
        // return redirect()->route('other.dashboard');

    }
    
    function dashboard()
    {
        $user=User::all();
        //return $user;
        return view('other.dashboard')
                    ->with('users',$user);


    }
    function adminDashboard()
    {
        $admin=User::where('type','=','admin')->get();
        $user=User::where('type','=','user')->get();
        //return $user;
        return view('other.admin_dashboard')
                    ->with('admin',$admin)
                    ->with('user',$user);


    }
    function userDashboard()
    {
        $user=User::where('type','=','user')->get();
        //return $user;
        return view('other.user_dashboard')
                    ->with('user',$user);


    }
    
    // function userDetails(Request $req)
    // {
    //     return view('other.userDetails')
    //     ->with('name',$req->name)
    //     ->with('id',$req->id)
    //     ->with('email',$req->email)
    //     ->with('password',$req->password)
    //     ->with('type',$req->type);
    // }

    function userDetails(Request $req)
    {
        $user = User::where('id', '=', $req->id)->first();
        return view('other.userDetails')
        ->with('user',$user);
        
    }
}
