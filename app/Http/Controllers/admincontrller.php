<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Feedback;
class admincontrller extends Controller
{

    public function adminDashboard()
{
    // Fetch all feedback from database
    $feedbacks = Feedback::all();

    // Pass to view
    return view('admindashboard', compact('feedbacks'));
}
}
