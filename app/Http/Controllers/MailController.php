<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Mail;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(Request $request){
        $mailData = [
            'title' => 'Mail from Nazam Ansari', // Corrected the spelling to 'title'
            'body' => 'this is a random email by the company',
        ];
        Mail::to($request->input('email'))->send(new DemoMail($mailData));
        return redirect()->back();
        // dd($request->input('email'));
    }

}
