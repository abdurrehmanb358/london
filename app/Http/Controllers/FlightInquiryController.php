<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FlightInquiry;

class FlightInquiryController extends Controller
{
    public function submit(Request $request)
    {
        $flight = FlightInquiry::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'Email' => $request->input('Email'),
            'phhone_nu,mber' => $request->input('phone_number'),
            'destination' => $request->input('destination'),
              'date of departure' => $request->input('date of departure'),
            'date of arrivel' => $request->input('date of arrivel'),
            'airline' => $request->input('airline'),
            'number of passenger' => $request->input('number of passenger'),
            'class' => $request->input('class'),
            'message' => $request->input('message'),
            'form' => $request->input('form'),
            'form' => $request->input('form'),
          

        ]);


    }
}