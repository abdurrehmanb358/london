<?php

namespace App\Http\Controllers;

use App\Models\hotel;
use Illuminate\Http\Request;
use DB;

class hotelController extends Controller
{
    public function index() {
        return view('/back-panel/hotel/index',['hotels'=> hotel::orderBy('created_at', 'desc')->get()]);
    }
    public function create(){
        return view('back-panel.hotel.create');
    }
    public function store(Request $request){

        // Validate Data
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            'price' => 'required',
            'notes' => 'required',
            'city' => 'required',
            'country' => 'required'
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
        $hotel->city = $request->city;
        $hotel->country = $request->country;

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
        'notes' => 'required',
        'city' => 'required',
        'country' => 'required'
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
        $hotel->city = $request->city;
        $hotel->country = $request->country;

        $hotel->save();

        return redirect('/back-panel/hotel');
    }

    public function destroy($id){
        $hotel = hotel::where('id',$id)->first();
        $hotel->delete();
        return back()->withsuccess('hotel Deleted !!!');
    }
    public function Hotel_listing() {
        return view('layouts.Hotel_Listing',['hotels'=> hotel::orderBy('created_at', 'desc')->simplePaginate(10)]);
    }

    public function show($id){
        $hotel = hotel::where('id',$id)->first();
        return view('layouts.show', ['hotels'=> $hotel]);
    }

    // search Function
    public function search(Request $request){

        $priceSearch = $request->input('newSearch');
        $nameSearch1 = $request['inputSearch1'];
        $nameSearch2 = $request['inputSearch2'];

        list($minPrice, $maxPrice) = explode(' - ', str_replace('$', '', $priceSearch));


        if($priceSearch){
            $hotels = hotel::where('name','Like','%'.$nameSearch1.'%')->where('name','Like','%'.$nameSearch2.'%')->whereBetween('price', [$minPrice, $maxPrice])->orderBy('created_at', 'desc')->get();
        }else{
            $hotels = hotel::where('name','Like','%'.$nameSearch1.'%')->orderBy('created_at', 'desc')->get();
        }

        echo $hotels;

    }

    public function Home(){
        return view('layouts.index');
    }

    public function searchHotels(Request $request)
    {
        $city = $request->input('city');
        $country = $request->input('country');

        // dd($city);

        $hotels = Hotel::where('city', $city)
                       ->orwhere('country', $country)
                       ->orderBy('created_at', 'desc')
                       ->simplePaginate(10);

        return view('layouts.Hotel_listing', compact('hotels'));
    }

}
