<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class FlightInquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $inquiries = Inquiry::all();
    return view('back-panel.flightinquery.index', compact('inquiries'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inquiry = Inquiry::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
           
'phone_number' => $request->phone_number,
            'destination' => $request->destination,
            'form' => $request->form,
            'date_of_departure' => $request->date_of_departure,
            'date_of_arrival' => $request->date_of_arrivel,
            'airline' => $request->airline,
            'number_of_passenger' => $request->number_of_passenger,
            'class' => $request->class,
            'message' => $request->message,
            'flight_id' => $request->flight_id,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
  
}
