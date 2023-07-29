<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function loginForm(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            return view('login');
        }

        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            return redirect()->route('homePage');
        } else {
            return redirect()->back()->withInput();
        }

    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }
}
