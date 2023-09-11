<?php

namespace App\Http\Controllers;


use App\Models\hotel;
use App\Models\Flight;
use App\Models\flight_inquiry;
use App\Models\Flightinquiry;
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
        

        // Validate Data
        // $request->validate([
            
        //     'flying_from' => 'required',
        //     'flying_to' => 'required',
        //     'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
        //     'price' => 'required',
        //     'type' => 'required',
            
        //     'trip_type' => 'required',
        //     'departing' => 'required',
        //     'returning' => 'required',
        //     'class' => 'required',
            
        //     'message' => 'required',
        //    
            
        //     ]);

            

                // upload Image
                if ($request->hasFile('image')) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('hotels'), $imageName);
                } else {
                    // Handle the case where no image is uploaded.
                    $imageName = null; // You can set a default value or handle this differently.
                }

                $flight = new Flight;
                $flight->images = $imageName;
             $flight->flying_from = $request->flying_from;
                $flight->flying_to = $request->flying_to;
                $flight->price = $request->price;
                $flight->type = $request->type;
                $flight->trip_type = $request->trip_type;
                $flight->departing = $request->departing;
                $flight->returning = $request->returning;
                $flight->class = $request->class;
                $flight->message = $request->message;
                $flight->save();

                return redirect('/back-panel/flight')->with('success', 'flight Created !!!');

        // $flight = Flight::create([
        //     'images' => $request->input('images'),
        //     'flying_from' => $request->input('flying_from'),
        //     'flying_to' => $request->input('flying_to'),
        //     'price' => $request->input('price'),
        //     'type' => $request->input('type'),
        //     'trip_type' => $request->input('round_trip'),
        //     'departing' => $request->input('departing'),
        //     'returning' => $request->input('returning'),
        //   'class' => $request->input('class'),
        //     'message' => $request->input('message'),


        // ]);


        // return redirect()->route('flight.index')->with('success', 'insurance created successfully');


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
    public function update(request $request, $id){
 
        $Flight = Flight::where('id',$id)->first();
        
        if ($request->hasFile('image')) {
            // Check if a file named 'image' was uploaded in the request.
        
            $imageName = time() . '.' . $request->image->extension();
            // Generate a unique file name by concatenating the current timestamp with the file extension.
        
            $request->image->move(public_path('hotels'), $imageName);
            // Move the uploaded file to the 'hotels' directory with the generated file name.
        
            $Flight->images = $imageName;
            // Set the 'images' property (or column) of the $Flight object to the generated file name.
        } else {
            // If no image is uploaded in the request.
        
            $Flight->images = null;
            // Set the 'images' property (or column) of the $Flight object to null (or handle it as needed).
        }
        
      

        // upload Image
       
        $Flight->flying_from = $request->flying_form;
        $Flight->flying_to = $request->flying_to ;
        $Flight->price = $request->price;
        $Flight->type = $request->type;
        $Flight->departing = $request->departing;
        $Flight->returning = $request->returing;
        $Flight->class = $request->class;
        $Flight->message = $request->message;
     

        $Flight->save();

        return redirect('/back-panel/flight');
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

        $hotels = DB::table('hotels')->orderBy('created_at', 'desc')->paginate(4);
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


//     public function searchflights(Request $request)
//     {
//         $flyingfrom = $request->input('city');
//         $flyingto = $request->input('country');



//         $flights = Flight::where('flying_from', $city)
//                        ->orwhere('flying_to', $country)
//                        ->orwhere('deparding', $country)
//                     //    ->orderBy('created_at', 'desc')
//                        ->simplePaginate(10);

//         return view('layouts.flihgtlisting', compact('flights'));
//     }

// }


public function showflight($id){
    $flight = Flight::where('id',$id)->first();
  
    return view('layouts.flightdetail', compact('flight'));
}


public function search(Request $request)
{
    $triptype = $request->input('triptype');
    $search = $request->input('search');
    $flyingfrom = $request->input('flying_from'); // Corrected variable name
    $flyingto = $request->input('flying_to');
    $departing = $request->input('departing');

    $query = Flight::query();

    if ($triptype === 'roundtrip') {
        $query->where('trip_type', 'roundtrip');
    } elseif ($triptype === 'oneway') {
        $query->where('trip_type', 'oneway');
    }

    // Check if flying_from parameter is not empty
    if ($flyingfrom !== '') {
        $query->where('flying_from', 'like', "%$flyingfrom%");
    }
    if ($flyingto!== '') {
        $query->where('flying_to', 'like', "%$flyingto%");
    }
    if ($departing!== '') {
        $query->where('departing', 'like', "%$departing%");
    }

    $results = $query->get();

    return response()->json($results);
}
public function flight_listing(Request $request) {

    if($request->input('flying_from')){
        $data = $request->all();
        return view('layouts.flihgtlisting', array_diff_key(compact('data'), ['token' => '']));
    }
    return view('layouts.flihgtlisting');
}


public function searchflight(Request $request)
{

    $triptype = $request->input('triptype');
    $search = $request->input('search');
    $flyingfrom = $request->input('flying_from'); // Corrected variable name
    $flyingto = $request->input('flying_to');
    $departing = $request->input('departing');

    $query = Flight::query();

    if ($triptype === 'roundtrip') {
        $query->where('trip_type', 'roundtrip');
    } elseif ($triptype === 'oneway') {
        $query->where('trip_type', 'oneway');
    }

    // Check if flying_from parameter is not empty
    if ($flyingfrom !== '') {
        $query->where('flying_from', 'like', "%$flyingfrom%");
    }
    if ($flyingto!== '') {
        $query->where('flying_to', 'like', "%$flyingto%");
    }
    if ($departing!== '') {
        $query->where('departing', 'like', "%$departing%");
    }

    $results = $query->get();

    return view('flight.search_results', ['results' => $results]);
}
public function index1()
{
    $flight = Flight::all(); // Retrieve all flights

    return view('layouts.flightdetail', compact('flight'));
}

    public function flightInquiries(Request $request )
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'nullable|email', // Use 'nullable' instead of 'optional'
            'phone' => 'required',
            'destination' => 'required',
            'form' => 'required',
            'date_of_departure' => 'required',
            'date_of_arrivel' => 'required',
            'noOfPassenger' => 'required',
            'class' => 'required',
            'message' => 'required',
            'airline' => 'required'
        ]);
        $fname = $request->input('first_name');
        $lname = $request->input('last_name');
        $email= $request->input('email');
        $phone = $request->input('phone');
        $destination = $request->input('destination');
        $form = $request->input('form');
        $startDate = $request->input('date_of_departure');
        $endDate = $request->input('date_of_arrivel');
        $noOfPassenger = $request->input('noOfPassenger');
        $class = $request->input('class');
        $message = $request->input('message');
        $airline = $request->input('airline');
        $flightId = $request->input('flightId');



        $isInserSuccess = flight_inquiry::create([
            'fname' => $fname,
            'lname' => $lname,
            'email' => $email,
            'phone' => $phone,
            'destination' => $destination,
            'form' => $form,
            'airline' => $airline,
            'dateOfDeparture' => $startDate,
            'dateOfArival' => $endDate,
            'noOfPassenger' => $noOfPassenger,
            'class' => $class,
            'message' => $message,
            'flightId' => $flightId,


        ]);

        if($isInserSuccess)
            return redirect()->back();
        else
            echo '<h1>Insert failed</h1>';

    }
    public function flight_inquiry() {
        $show = DB::table('flight_inquiry as fi')
                ->join('flights as f','fi.flightId','=','f.id')
                ->select('f.flying_from','f.flying_to','fi.fname','fi.lname','fi.email','fi.id','fi.phone','fi.destination','fi.form','fi.dateOfDeparture','fi.dateOfArival','fi.airline','fi.noOfPassenger','fi.class','fi.message','fi.created_at')
                ->orderBy('created_at', 'desc')
                ->get();
        return view('/back-panel/flight_inquiry',['flightInquiry'=> $show]);
    }







}






//   // $flight->update($request->all());
//   $flight->update($request->all());
//   return redirect()->route('flight.index')->with('success', ' updated Successfully');