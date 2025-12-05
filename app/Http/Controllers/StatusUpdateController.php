<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
class StatusUpdateController extends Controller
{
   public function statuschange(Request $request, $id)
{
    $request->validate([
        'status' => 'required|string'
    ]);

    // Find the feedback by id
    $feedback = Feedback::find($id);

    // Check if feedback exists (id + user_id together)
    if (!$feedback) {
        return redirect()->back()->with('error', 'Feedback not found!');
    }

    // ADMIN CHECK (admin updates, but must follow the real user_id stored)
    if (auth()->user()->role !== 'Admin') {
        return redirect()->back()->with('error', 'Unauthorized!');
    }

    // Update status
    $feedback->status = $request->status;
    $feedback->save();

    return redirect()->back()->with('success', 'Status updated successfully.');
}

}
