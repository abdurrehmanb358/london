<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use App\Models\insurance_inquires;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $insurances = Insurance::all();
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
        $result =$request->validate([
            
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:200000',
            'days' => 'required',
            'travel' => 'required',
            'insurance_charges' => 'required',
            'message' => 'required',
            
        ]);



        $insurance = new Insurance;

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->extension();

            $imageName = time() . '.' . $request->file('image')->extension();
            $request->image->move(public_path('hotels'), $imageName);
              $insurance->imges = $imageName;

        }

       
        $insurance->days = $request->days;
        $insurance->travel_plan_for = $request->travel;
        $insurance->insurance_charges = $request->insurance_charges;
        $insurance->insurance_benefits = $request->message;

        $insurance->save();


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
    public function update(request $request, $id)
    {

        $insurance = insurance::where('id', $id)->first();
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image'); // Get the uploaded file object
        
            $imageName = time() . '.' . $imageFile->getClientOriginalExtension();
        
            $imageFile->move(public_path('hotels'), $imageName);
        
            $insurance->imges = $imageName;
        }
        
        
      
        
        
        $insurance->days = $request->days;
        $insurance->travel_plan_for = $request->travel;
        $insurance->insurance_charges = $request->insuranc_charges;
        $insurance->insurance_benefits = $request->message;

        $insurance->save();

        return redirect('/back-panel/insurance');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Insurance $Insurance)
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

    public function getinsurance()
    {
        $insurances = insurance::simplepaginate(10);
        return view('layouts.insurancesearch', compact("insurances"));
    }
    public function applyinsurance($id)
    {

        $insurances = insurance::where('id', $id)->first();
        return view('layouts.insurance', compact("insurances"));
    }



    public function insuranceInquiries(Request $request )
    {

        
        $request->validate([
      
            'costomer_name' => 'required',
            'CNIC' => 'required|unique:insurance_inquiries', 
            'data_of_birth' => 'required|date',
            'father_name' => 'required',
            'mobil_name' => 'required',
            'Email' => 'required|email|unique:insurance_inquiries', 
            'gender' => 'required',
            'purppose_of_vist' => 'required',
            'adress' => 'required',
            'passport' => 'nullable',
            'Depature_date' => 'required|date',
            'select_country_travel' => 'required',
            'airline' => 'required',
            'number_of_passengers' => 'required|integer|min:1',
            'class' => 'required',
            'price'=> 'required',

            'beneficiary_name' => 'required',
            'beneficiary_relation' => 'required',
            'beneficiary_CNIC' => 'nullable|unique:insurance_inquiries', 
            'beneficiary_phone' => 'required',
            'beneficiary_adress' => 'required',
           
        ]);
        

        $costomer_name = $request->input('costomer_name');
        $CNIC = $request->input('CNIC');
        $dataOfBirth = $request->input('data_of_birth');
        $fatherName = $request->input('father_name');
        $phone = $request->input('mobil_name');
        $email = $request->input('Email');
        $gender = $request->input('gender');
        $destination = $request->input('purppose_of_vist');
        $address = $request->input('adress');
        $startDate = $request->input('Depature_date');
        $select_country = $request->input('Select country travel');
        $airline = $request->input('airline');
         $noOfPassenger = $request->input('number_of_passengers');
        $class = $request->input('class');
        $price = $request->input('price');
        $passport = $request->input('passport');
        $insurancetId = $request->input('insurance_id');
        //add benificary//
         $beneficiaryName = $request->input('beneficiary_name');
        $beneficiaryRelation = $request->input('beneficiary_relation');
        $beneficiaryCNIC = $request->input('beneficiary_CNIC');
        $beneficiaryPhone = $request->input('beneficiary_phone');
        $beneficiaryAddress = $request->input('beneficiary_adress');
      

            
        $isInserSuccess = insurance_inquires::create([
        

            'costomer_name'=>$costomer_name,
            'CNIC'=>$CNIC,
            'data_of_birth'=> $dataOfBirth,
            'father_name'=>$fatherName,
            'mobil_name'=>$phone,
            'Email'=>$email,
            'gender'=>$gender,
            'purppose_of_vist'=>$destination,
            'adress'=> $address,
            'passport'=>  $passport,

            'Depature_date'=> $startDate,
          
            'select_country_travel'=> $select_country,
            'airline'=> $airline,
            'number_of_passengers'=> $noOfPassenger,
             'class'=>$class,
            'price'=>$price,
            'beneficiary_name'=> $beneficiaryName,
            'beneficiary_relation'=> $beneficiaryRelation,
            'beneficiary_CNIC'=> $beneficiaryCNIC,
            'beneficiary_phone'=> $beneficiaryPhone,
            'beneficiary_adress'=>  $beneficiaryAddress,
            'insuranceId'=> $insurancetId,

        ]);
    //     if($isInserSuccess)
    //     return redirect()->back();
    // else
    //     echo '<h1>Insert failed</h1>';
    }
   










}
        
            
            
            
            
        
            
      
          


     

       



