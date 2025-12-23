<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function userlogin(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // Remember Me checkbox (true / false)
        $remember = $request->has('remember');

        if (Auth::attempt(
            $request->only('email', 'password'),
            $remember
        )) {
            // Prevent session fixation
            $request->session()->regenerate();

            // Role based redirect
            return Auth::user()->role === 'Admin'
                ? redirect()->route('admindashboard')
                : redirect()->route('userdashboard');
        }

        return back()->with('error', 'Invalid login details');
    }
}
