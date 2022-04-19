<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\Blade;
use App\Models\User;
use Hash;
use Session;
use Auth;

class AuthController extends Controller
{
    public function signin(){
        return view('frontend.auth.signin');
    }

    public function signup(){
        return view('frontend.auth.signup');
    }

    public function register_user(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'contact_no'=>'required|numeric|min:9',
            'password'=>'required_with:password|same:password|min:6',
            'conf_password'=>'required_with:password|same:password|min:6',
        ]);
        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verified_at = date("Y-m-d h:i:s");
        $user->contact_no = $request->contact_no;
        $user->is_active = 1;
        $user->role = 3;
        $user->password = Hash::make($request->password);
        $user->remember_token = $request->_token;
        $res = $user->save();
        if($res){
            return back()->with('success','You have registered successfully.');
        }else{
            return back()->with('fail','Something went wrong.');
        }
    }

    public function login_user(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginUsrId',$user->id);
                $request->session()->put('loginUsrName',$user->name);
                $request->session()->put('loginUsrEmail',$user->email);
                return redirect('home');
            }else{
                return back()->with('fail','Incorrect Email & Password.');
            }
        }else{
            return back()->with('fail','Incorrect Email.');
        }
    }

    

    public function logout(){
        Session::flush();
        
        Auth::logout();

        return redirect('home');
    }

    public function forgot_user_pass(){
        return view('frontend.auth.forgot_user_pass');
    }

    public function forgot_user_password(Request $request){
        $request->validate([
            'email'=>'required|email',
        ]);

        $user = User::where('email','=',$request->email)->first();
        //echo'<pre>'; echo print_r($user); exit;
        if($user){
            return back()->with('success','Your new password is send to your registered email.');
        }else{
            return back()->with('fail','Email is not exist.');
        }
        
    }

}
