<?php

namespace App\Http\Controllers;

use App\Models\hotel;
use Illuminate\Http\Request;

class hotelController extends Controller
{
    public function index() {
        return view('/back-panel/hotel/index',['hotels'=> hotel::get()]);
    }
    public function create(){
        return view('back-panel.hotel.create');
    }
    public function store(Request $request){

        // Validate Data
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,pgp,png,gif|max:10000',
            'price' => 'required',
            'notes' => 'required',
            'location' => 'required'
        ]);

        // upload Image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('hotels'), $imageName);
       
        $hotel = new hotel;
        $hotel->image = $imageName;
        $hotel->name = $request->name;
        $hotel->description = $request->description;
        $hotel->price = $request->price;
        $hotel->notes = $request->notes;
        
        $hotel->save();
       
        return redirect('/back-panel/hotel')->with('success', 'Hotel Created !!!');

    }

    public function edit($id){
        $hotel = hotel::where('id',$id)->first();
        return view('/back-panel/hotel/edit',['hotel' => $hotel]);
    }

    public function update(request $request, $id){
       // Validate Data
       $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => 'nullable|mimes:jpeg,pgp,png,gif|max:10000',
        'price' => 'required',
        'notes' => 'required'
        ]);

        $hotel = hotel::where('id',$id)->first();

        if(isset($request->image)){
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('hotels'), $imageName);
            $hotel->image = $imageName;
        }

        // upload Image
        $hotel->name = $request->name;
        $hotel->description = $request->description;
        $hotel->price = $request->price;
        $hotel->notes = $request->notes;
        
        $hotel->save();
    
        return redirect('/back-panel/hotel');
    }

    public function destroy($id){
        $hotel = hotel::where('id',$id)->first();
        $hotel->delete();
        return back()->withsuccess('hotel Deleted !!!');
    }
    public function Hotel_listing() {
        return view('layouts.Hotel_Listing',['hotels'=> hotel::get()]);
    }

    public function show($id){
        $hotel = hotel::where('id',$id)->first();
        return view('layouts.show', ['hotel'=> $hotel]);
    }
}
