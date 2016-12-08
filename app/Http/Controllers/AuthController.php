<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function handleLogin(Request $request)
    {
        $data = $request->only('email','password');

        if (\Auth::attempt($data))
        {
/*            return 'logged';*/
            return redirect()->intended('projets');
        }

        return back();
    }

    public function logout()
    {
        \Auth::logout();
        return redirect()->route('login');
    }
}
