<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerForm ()
    {
        return view('register');
    }

    public function store(UserRegisterRequest $request)
    {
        dd("ok");
    }
}
