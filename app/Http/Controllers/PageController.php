<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }
    
    public function logIn(){
        return view('pages.logIn');
    }
    
    public function register(){
        return view('pages.register');
    }
    
    public function about(){
        return view('pages.aboutUs');
    }
    
}
