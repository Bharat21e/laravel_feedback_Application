<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function userlogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {

            $request->session()->regenerate();

            return Auth::user()->role === 'Admin'
                ? redirect()->route('admindashboard')
                : redirect()->route('userdashboard');
        }

        // return back()->with('error', 'Invalid login details');
        // return redirect()->route('mylogin')->with('error', 'Invalid login details');
        return "<script>
            alert('Invalid login details');
            window.location.href = '".route('mylogin')."';
        </script>";
    }
}
