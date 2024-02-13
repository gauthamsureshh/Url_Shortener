<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }
    
    public function logIn(){
        return view('pages.logIn');
    }
    public function logInpost(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $cred=$request->only('email','password');
        if(Auth::attempt($cred)){
            return redirect(route('home'));
        }
        return redirect(route('login'))->with('errors',"Invalid Credentials");
    }

    public function register(){
        return view('pages.register');
    }

    public function registerPost(Request  $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);

        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=Hash::make($request->password);
        $user=User::create($data);
        if(!$user){
            return redirect(route('register'))->with('errors',"Register Failed");
        }
        return redirect(route('login'));
    }
    
    function logout(){
        Session()->flush();
        Auth::logout();
        return redirect(route('login'));
    }
    public function about(){
        return view('pages.aboutUs');
    }
    
}
