<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function user_profile(Request $request)
    {
        if ($request->session()->has('loginUsrId')) {
            
            $usrId = $request->session()->get('loginUsrId');
            $user = User::where('id','=',$usrId)->first();
            
            if($user){
                
                return view('frontend.user_profile')->with('loggedInUsrData',$user);
                //return view("frontend.user_profile")->with($user);
                
            }else{
                return redirect('home');
            }
            
        }else{
            
            return redirect('home');
        }
    }

    public function apply_insurance(Request $request){
        if ($request->session()->has('loginUsrId')) {
            
            $usrId = $request->session()->get('loginUsrId');
            $user = User::where('id','=',$usrId)->first();
            
            if($user){
                
                return view('frontend.apply_insurance');
                
            }else{
                return redirect('home');
            }
            
        }else{
            
            return redirect('home');
        }
        
    }
}
