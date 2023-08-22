<?php

namespace App\Http\Controllers;

use App\Models\umrah_pakage;
use App\Models\umrah_pakages as umrah;
use Illuminate\Http\Request;

class umrah_pakages extends Controller
{
    public function index() {
        return view('/back-panel/umrah_pakage/index',['pakages'=> umrah::orderBy('created_at', 'desc')->get()]);
    }
    public function create(){
        return view('back-panel.umrah_pakage.create');
    }
    public function store(Request $request){

        // Validate Data
        $request->validate([
            'discription' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            'days' => 'required',
            'nights' => 'required'
        ]);


        // upload Image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('hotels'), $imageName);
        $umrah = new umrah;
        $umrah->image = $imageName;
        $umrah->discription = $request->discription;
        $umrah->days = $request->days;
        $umrah->nights = $request->nights;


        $umrah->save();

        return redirect('/back-panel/umrah_pakage')->with('success', 'Pakage Created !!!');

    }
    public function edit($id){
        $pakages = umrah::where('id',$id)->first();
        return view('/back-panel/umrah_pakage/edit',['umrah' => $pakages]);
    }
    public function update(request $request, $id){
        // Validate Data
        $request->validate([
         'discription' => 'required',
         'image' => 'nullable|mimes:jpeg,pgp,png,gif|max:10000',
         'days' => 'required',
         'nights' => 'required'
         ]);

         $umrah = umrah::where('id',$id)->first();

         if(isset($request->image)){
             $imageName = time() . '.' . $request->image->extension();
             $request->image->move(public_path('hotels'), $imageName);
             $umrah->image = $imageName;
         }

         // upload Image
         $umrah->discription = $request->discription;
         $umrah->days = $request->days;
         $umrah->nights = $request->nights;

         $umrah->save();

         return redirect('/back-panel/umrah_pakage');
     }
     public function destroy($id){
        $hotel = umrah::where('id',$id)->first();
        $hotel->delete();
        return back()->withsuccess('hotel Deleted !!!');
    }
    public function Umrah_listing() {
        return view('layouts.Umrah_Listing',['pakages'=> umrah::orderBy('created_at', 'desc')->simplePaginate(10)]);
    }
    public function Umrah_Detail($id){
        $hotel = umrah::where('id',$id)->first();
        return view('layouts.Umrah_Detail', ['pakages'=> $hotel]);
    }

}
