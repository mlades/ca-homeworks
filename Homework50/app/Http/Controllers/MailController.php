<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactUs;
class MailController extends Controller
{
    public function show()
    {
        return view('/contacts');
    }

    public function store(Request $request)
    {
        //request()->validate(['email' =>'required|email']);

        Mail::to(['adress' => $request->email])->send(new ContactUs($request));

        return redirect('/contacts')->with('message', 'You email is sent, thank you!');
    }
}
