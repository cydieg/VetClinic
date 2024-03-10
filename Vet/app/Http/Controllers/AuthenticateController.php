<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AuthenticateController extends Controller
{
    public function userLogin()
    {
        return view('Authentication.UserLogin.loginUser');
    }

    public function userRegister()
    {
        return view('Authentication.UserLogin.registerUser');
    }

    public function forgotPassword()
    {
        return view('Authentication.ForgotPass');
    }

    public function adminLogin()
    {
        return view('Authentication.AdminLogin.adminLogin');
    }

    public function adminRegister()
    {
        return view('Authentication.AdminLogin.adminRegister');
    }
}