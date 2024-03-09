<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AuthenticateController extends Controller
{
    public function login()
    {
        return view('Authentication.UserLogin.loginUser');
    }

    public function register()
    {
        return view('Authentication.UserLogin.registerUser');
    }

    public function forgotPassword()
    {
        return view('Authentication.ForgotPass');
    }
}