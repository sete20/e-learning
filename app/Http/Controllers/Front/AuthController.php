<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView(){
        if(Auth::guard('users')->user()){
            return redirect('users');
        }
        else if(Auth::guard('teacher')->user()){
            return redirect('teacher');
        }
        else {
            return view('front.auth.login');
        }
    }
    public function login(Request $request){
        $request->validate([
            "email" => "required|email",
            "password" => "required|min:6",
        ]);

        $credentials = [
            "email"=>$request->email,
            "password"=>$request->password
        ];

        if(Auth::guard('users')->attempt($credentials,  $request->has('remember'))){
            return redirect('users');
        }
        else {
            if(Auth::guard('teacher')->attempt($credentials, $request->has('remember'))){
                return redirect('teacher');
            }
            else {
                alert(__('Error!'), __('Email Or Password Not Correct'), 'error');
                return back();
            }
        }
    }

    public function registerView(){
        return view('front.auth.register');
    }

    public function register(Request $request){
        return $request;
    }

    public function reset(Request $request){
        return $request;
    }

    public function profile(){
        return view('front.profile.dashboard');
    }

    public function logout(){
        if(Auth::guard('users')->user()){
            Auth::guard('users')->logout();
            return redirect('login');
        }
        else if(Auth::guard('teacher')->user()){
            Auth::guard('teacher')->logout();
            return redirect('login');
        }
        else {
            return redirect('login');
        }
    }
}
