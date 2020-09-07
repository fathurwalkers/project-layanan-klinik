<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
        //
    }

    public function register()
    {
        return view('register');
    }

    public function postregister(Request $request)
    {
        //
    }
}
