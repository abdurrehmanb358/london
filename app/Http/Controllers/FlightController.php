<?php

namespace App\Http\Controllers;


use App\Models\hotel;
use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

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
    public function getFlight() {
        $flights = Flight::all();
        return response()->json(['flights' => $flights]);
    }
    
    public function getFlishtView($id) {
        $flight = Flight::find($id);



        
    // if ($flight === null) {
    //     // Flight not found, handle accordingly (e.g., show an error message or redirect)
    //     return view('layouts.flihgtlisting');
    // }

    // If flight data is found, pass it to the view for rendering
    return view('layouts.flihgtlisting', ['flight' => $flight]);
    }
    

    public function getFlights()
    {

        $hotels = DB::table('hotels')->paginate(4);
        $domesticFlights = Flight::where('type', 'Domestic')->get();
        $interFlights = Flight::where('type', 'inter')->get();
    
      return view('layouts.index', [
            'domesticFlights' => $domesticFlights,
            'interFlights' => $interFlights,
            'hotels' => $hotels
        ]);
    }
    public function show1(Flight $flight)
    {
        return view('layouts.flightdetail', compact('flight'));
    }
  

    public function search(Request $request)
    {
        $search = $request->input('search');

        $flights = Flight::where("flying_from" , 'like' , "%$search%");
        return view('layouts.flihgtlisting', compact('flights'));
    
    
    
    }
// // public function get(Request $request)
// // {
// //     $tripType = $request->input('tripType');
    
// //     // Fetch flights based on $tripType (Round Trip or One Way)
// //     $flights = Flight::where('trip_type', $tripType)->get();

// //     return response()->json($flights);
// }


public function showflight($id){
    $flight = Flight::where('id',$id)->first();
    return view('layouts.flightdetail', compact('flight'));
}



}


    



