<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        $name = $request->input('name');
        $messageContent = $request->input('message');

        Mail::raw("From: $name\n\nMessage:\n$messageContent", function ($message) {
            $message->to('anshuldhoundiyal05@gmail.com')
                    ->subject('A Sweet Message From Your Love 💌');
        });

        return back()->with('success', 'Message sent successfully!');
    }
}
