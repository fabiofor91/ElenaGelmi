<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\Contatti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contactMail(Request $request){
        // dd($request);
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');
        // dd($name, $email, $subject, $message);
        $userData = compact('name', 'email', 'subject', 'message');
        Mail::to($email)->send(new Contatti($userData));
        Mail::to('hello@example.com')->send(new AdminMail($userData));
        return redirect()->back()->with('message', 'Your message has been sent!');
    }
}
