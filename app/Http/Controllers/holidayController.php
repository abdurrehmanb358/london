<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\holiday;

class holidayController extends Controller
{
    public function index() {
        return view('/back-panel/holidays/index',['holidays'=> holiday::orderBy('created_at', 'desc')->get()]);
    }
    public function create(){
        return view('/back-panel/holidays/create');
    }
    public function store(Request $request){

        // Validate Data
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            'price' => 'required',
            'notes' => 'required',
            'type' => 'required',
            'category' => 'required',

        ]);

        // upload Image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('hotels'), $imageName);

        $hotel = new holiday;
        $hotel->image = $imageName;
        $hotel->name = $request->name;
        $hotel->description = $request->description;
        $hotel->price = $request->price;
        $hotel->notes = $request->notes;
        $hotel->type = $request->type;
        $hotel->category = $request->category;

        $hotel->save();

        return redirect('/back-panel/holiday')->with('success', 'Holiday Created !!!');

    }
    public function edit($id){
        $hotel = holiday::where('id',$id)->first();
        return view('/back-panel/holidays/edit',['holidays' => $hotel]);
    }
    public function update(request $request, $id){
        // Validate Data
        $request->validate([
         'name' => 'required',
         'description' => 'required',
         'image' => 'nullable|mimes:jpeg,pgp,png,gif|max:10000',
         'price' => 'required',
         'notes' => 'required',
         'type' => 'required',
         'category' => 'required'
         ]);
         $hotel = holiday::where('id',$id)->first();

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
         $hotel->type = $request->type;
         $hotel->category = $request->category;

         $hotel->save();

         return redirect('/back-panel/holiday');
     }

     public function destroy($id){
         $hotel = holiday::where('id',$id)->first();
         $hotel->delete();
         return back()->withsuccess('holiday Deleted !!!');
     }
     public function holidayListing() {
        return view('layouts/holidayListing',['holidays'=> holiday::orderBy('created_at', 'desc')->simplePaginate(10)]);
    }

}
