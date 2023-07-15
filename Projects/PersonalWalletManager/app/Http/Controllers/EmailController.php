<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendGreetings;

class EmailController extends Controller
{
    public function create()
    {
        return view('emails.create');
    }

    public function send(Request $request)
    {

        return $request->all();

        
        $Data = [
            'Name' => 'Mehedi Jaman',
            'Email' => 'demo@demo.com',
            'Subject' => 'Demo Subject',
            'Message' => 'Demo Messasge',
        ];

       

        Mail::to('mail4mjaman@gmail.com')->send(new SendGreetings($Data));

        return "Email Send Done";
    }
}
