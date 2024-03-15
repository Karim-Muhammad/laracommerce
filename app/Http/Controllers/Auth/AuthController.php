<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signUp()
    {
        return view('pages.auth.sign-up');
    }

    public function signUpAction() {}

    public function signIn()
    {
        return view('pages.auth.sign-in');
    }

    public function signInAction() {}

    public function signOut()
    {
        auth()->logout();
        return redirect()->route('home');
    }

    public function profile()
    {
        return view('pages.auth.profile');
    }

    public function updateProfile() {}
}
