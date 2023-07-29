<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function loginForm(LoginRequest  $request)
    {
        if ($request->getMethod() == 'GET') {
            return view('login');
        }

        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)):
            return redirect()->to('login')
                ->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);

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
