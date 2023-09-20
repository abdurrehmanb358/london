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
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('hotels'), $imageName);
        } else {
            // Handle the case where no image is uploaded.
            $imageName = null; // You can set a default value or handle this differently.
        }
        
        $insurance = new Insurance;
        
        $insurance->imges = $imageName;
    
        
        $insurance->days = $request->days;
        $insurance-> travel_plan_for= $request->travel;
        $insurance->insurance_charges = $request->insurance_charges;
        $insurance->insurance_benefits = $request->message;
        $insurance ->save();

        return redirect('/back-panel/insurance')->with('success', 'insurance Created !!!');
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
        } else {
            // Handle the case where no image is uploaded.
            $imageName = null; // You can set a default value or handle this differently.
        }


         $insurance->days = $request->days;
         $insurance->travel_plan_for = $request->travel ;
         $insurance->insurance_charges = $request->insuranc_charges;
         $insurance->Insurance_benefits =$request->message;
 
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
    public function simple()
    {
        return view('layouts.insurancesearch');
    }
    public function Aboutus()
    {
        return view('layouts.Aboutus');
    }

    public function getinsurance(){
        $insurances = insurance::simplepaginate(10);
       return view('layouts.insurancesearch', compact("insurances"));
      

    }
     public function applyinsurance($id){

        $insurances = insurance::where ('id', $id)->first();
        return view('layouts.insurance', compact("insurances"));
     }

}










