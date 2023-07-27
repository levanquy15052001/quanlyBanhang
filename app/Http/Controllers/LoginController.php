<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}
