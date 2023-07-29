<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function loginForm(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            return view('login');
        }

        $rule =  [
            'email' => 'required|string|email',
            'password' => 'required',
        ];

        $request->validate($rule);

        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials))
        {
                return redirect()->route('homePage');
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }

    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }
}
