<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function loginForm()
    {
            return view('login');
    }

    public function postLogin(LoginRequest  $request)
    {
        $credentials = $request->getCredentials();

        if(Auth::validate($credentials)):
            $user = Auth::getProvider()->retrieveByCredentials($credentials);

            Auth::login($user);
    
            return $this->authenticated($request, $user);
        endif;
        return redirect()->to('login')
        ->withErrors('warning' , 'Login Not Success');
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }

    protected function authenticated(Request $request, $user) 
    {
        return redirect()->intended();
    }
}
