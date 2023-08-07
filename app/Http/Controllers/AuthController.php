<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication passed, redirect to the login success route
            return redirect()->route('loginSuccess');
        } else {
            // Authentication failed, redirect back with errors
            return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials']);
        }
    }

    public function handleLoginSuccess(Request $request)
    {
        // This function is not needed because we handle login success in the 'login' function.
        // You can remove this function.
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
