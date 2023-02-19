<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() 
    {
        return view('stuction.homepage');
    }

    public function login() 
    {   
        return view('auth.login');
    }

    public function signup() 
    {
        return view('auth.signup');
    }

    public function settings()
    {
        return view('stuction.user-settings');
    }

    public function profile() {
        return view('stuction.user-profile');
    }
}
