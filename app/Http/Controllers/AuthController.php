<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function loginAttempt(LoginRequest $request)
    {
        $email     = $request->get('email');
        $password  = $request->get('password');

        if (Auth::attempt(['email'=>$email, 'password'=>$password])) {
            return redirect()->route('index.gallery');
        } else {
            return redirect()->back()->withErrors(['Wrong email or password']);
        }
    }

    public function logOut()
    {
        Auth::guard('web')->logout();
      
        return redirect()->route('admin.login');
    }
}
