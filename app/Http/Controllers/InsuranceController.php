<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $insurances =Insurance::all();
    return view('back-panel.insurance.index', compact('insurances'));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back-panel.insurance.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $insurance = Insurance::create([
            'imges' => $request->input('image'),
            'days' => $request->input('days'),
            'travel_plan_for'=> $request->input('travel'),
           'insurance_charges'=>$request->input('insuranc_charges'),
            
           


        ]);


        return redirect()->route('insurance.index')->with('success', 'insurance created successfully');

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
    public function edit(Insurance $Insurance)
    {

        return view('back-panel.insurance.edit', compact('Insurance'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(request $request, $id){
      
 
         $insurance = insurance::where('id',$id)->first();
 
         if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('hotels'), $imageName);
            $insurance->imges = $imageName; // Make sure $insurance is an instance of your model.
            $insurance->save(); // Save the model with the image filename.
        }
         // upload Image

         $insurance->days = $request->days;
         $insurance->travel_plan_for = $request->travel ;
         $insurance->insurance_charges = $request->insuranc_charges;
      
 
         $insurance->save();
 
         return redirect('/back-panel/insurance');
     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Insurance $Insurance)
    {
        $Insurance->delete();
        return redirect()->route('insurance.index')->with('success', ' deleted Successfully');
    }
}


