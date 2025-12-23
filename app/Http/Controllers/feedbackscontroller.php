<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class feedbackscontroller extends Controller
{
    public function userfeedbacksubmit()
    {
           $userfeedbacks = Feedback::where('user_id',Auth::id())
                                ->orderBy('created_at', 'desc')
                                ->get();

        return view('userdashboard', compact('userfeedbacks'));

    }
}
