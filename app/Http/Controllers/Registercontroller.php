<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Registercontroller extends Controller
{
    public function register(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Create user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'user';
        $user->save();
        if($user){
            // If saved successfully, redirect to login
            return redirect()->route('mylogin')->with('success', 'Registration successful!');
        } else {
            // If not saved
            return back()->with('error', 'Registration failed! Please try again.');
        }
    }
}
