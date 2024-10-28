<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }
    // x
    public function store(Request $request)
    {
        $data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Mail::raw("first Name : {$data['firstname']}\nlast Name : {$data['lastname']}\nEmail: {$data['email']}\nphone: {$data['phone']}\nMessage: {$data['message']}", function ($message) use ($data) {
            $message->to('germanysamir1@gmail.com')
                ->subject('Nouveau message de contact');
        });

        return redirect('/contact')->with('success', 'Votre message a bien été envoyé.');

        // x
    }
}
