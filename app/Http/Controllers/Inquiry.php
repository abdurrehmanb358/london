<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class Inquiry extends Controller
{
    public function store(Request $request)
    {
        $flight = Inquiry::create([
            'flying_from' => $request->input('flying_from'),
            'flying_to' => $request->input('flying_to'),
            'price' => $request->input('price'),
            'type' => $request->input('type'),
            'departing' => $request->input('departing'),
            'returning' => $request->input('returning'),
          
            'class' => $request->input('class'),
          

        ]);
}
}