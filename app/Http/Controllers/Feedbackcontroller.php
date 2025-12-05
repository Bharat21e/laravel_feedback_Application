<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Feedback;

class feedbackcontroller extends Controller
{
    public function feedbacksubmit(Request $request)
    {
        // Validate correct input
        $request->validate([
            'text' => 'required'
        ]);

        // Insert record
        Feedback::create([
            'user_id' => Auth::id(),
            'name'    => Auth::user()->name,
            'email'   => Auth::user()->email,
            'message' => $request->text,   // <-- IMPORTANT
            'status'  => 'pending'
        ]);

        return "<script>
            alert('Your feedback is submitted. Thank you!');
            window.location.href = '".route('userdashboard')."';
        </script>";
    }
}
