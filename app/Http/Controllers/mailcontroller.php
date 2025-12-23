<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendmail($user, $messageText)
    {
        Mail::raw(
            "New feedback submitted\n\n"
            ."Name: {$user->name}\n"
            ."Email: {$user->email}\n\n"
            ."Message:\n{$messageText}",
            function ($message) {
                $message->to('mahajanbharat175@gmail.com')
                        ->subject('Mail from Feedback Application');
            }
        );
    }
}
