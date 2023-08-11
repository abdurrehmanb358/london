<?php

namespace App\Http\Controllers;


use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Routing\Controller;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $flights = Flight::all();
        return view('back-panel.flight.index', compact('flights'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back-panel.flight.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $flight = Flight::create([
            'images' => $request->input('images'),
            'flying_from' => $request->input('flying_from'),
            'flying_to' => $request->input('flying_to'),
            'price' => $request->input('price'),
            'type' => $request->input('type'),
            'trip_type' => $request->input('round_trip'),
            'departing' => $request->input('departing'),
            'returning' => $request->input('returning'),
          'class' => $request->input('class'),
            'message' => $request->input('message'),
          

        ]);
   

        return redirect()->route('flight.index')->with('success', 'flight created successfully');
       
          
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flight $flight)
    {

        return view('back-panel.flight.edit', compact('flight'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flight $flight)
    {
        // $flight->update($request->all());
        $flight->update($request->all());
        return redirect()->route('flight.index')->with('success', ' updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flight $flight)
    {
        $flight->delete();
        return redirect()->route('flight.index')->with('success', ' deleted Successfully');
 
    }

    public function getFlights()
    {
        $domesticFlights = Flight::where('type', 'Domestic')->get();
        $interFlights = Flight::where('type', 'inter')->get();
     return view('layouts.index', [
            'domesticFlights' => $domesticFlights,
            'interFlights' => $interFlights,
            
        ]);
    }
    public function show1(Flight $flight)
    {
        return view('layouts.flightdetail', compact('flight'));
    }
  

//     public function search(Request $request)
//     {
      
    
//         $searchTerm = $request->input('search');
    
        // Perform search query
      
    
//         return view('layouts.flihgtlisting', compact('listings'));
//     }
    
public function get(Request $request)
{
    $tripType = $request->input('tripType');
    
    // Fetch flights based on $tripType (Round Trip or One Way)
    $flights = Flight::where('trip_type', $tripType)->get();

    return response()->json($flights);
}



public function search(Request $request)
{
    // $tripType = $request->input('tripType');
    $flyingFrom = $request->input('flying_from');
    $flyingTo = $request->input('flying_to');
    $departing = $request->input('departing');

    // dd($flyingFrom);
    
    // Fetch flights based on input criteria
    $flights = Flight::where('flying_from', 'LIKE', "%$flyingFrom%")
                     ->where('flying_to', 'LIKE', "%$flyingTo%")
                     ->get();

    return view('layouts.flihgtlisting', compact('flights'));
}



    



}


    



