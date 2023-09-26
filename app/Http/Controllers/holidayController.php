<?php

namespace App\Http\Controllers;

use App\Models\holiday;
use App\Models\holidayInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
                return view('layouts/holidayListing',['holidays'=> holiday::orderBy('created_at', 'desc')->get()]);
    }
    public function holidayListing2() {
        return view('layouts/holidayListing2',['holidays'=> holiday::orderBy('created_at', 'desc')->get()]);
    }
    public function Holiday_Detail($id){
        $hotel = holiday::where('id',$id)->first();
        return view('layouts.holidayDetail', ['holidays'=> $hotel]);
    }

    public function holidayInquiry(Request $request )
        {
            $request->validate([
                'pTravFrom' => 'required',
                'pStarDate' => 'required',
                'pEndDate' =>  'required',
                'adults' => 'required',
                'children' => 'required',
                'infants' => 'required',
                'passName' => 'required',
                'pEmail' => 'nullable|email',
                'Contnumber' => 'required',
                'description' => 'required',
            ]);

            $tFrom = $request->input('pTravFrom');
            $sDate= $request->input('pStarDate');
            $eDate = $request->input('pEndDate');
            $adults = $request->input('adults');
            $children = $request->input('children');
            $infants = $request->input('infants');
            $passName = $request->input('passName');
            $pEmail = $request->input('pEmail');
            $Contnumber = $request->input('Contnumber');
            $description = $request->input('description');
            $holidayId = $request->input('holidayId');



            $isInserSuccess = holidayInquiry::create([
                'pTravFrom' => $tFrom,
                'pStarDate' => $sDate,
                'pEndDate' => $eDate,
                'adults' => $adults,
                'children' => $children,
                'infants' => $infants,
                'description' => $description,
                'passName' => $passName,
                'pEmail' => $pEmail,
                'Contnumber' => $Contnumber,
                'holidayId' => $holidayId,

            ]);

            if($isInserSuccess)
                return redirect()->back()->with('success', 'Inquiry Submitted !!!');
            else
                echo '<h1>Insert failed</h1>';

        }

    public function holiday_inquiry() {
        $show = DB::table('holiday_inquiries as hi')
                ->join('holidays as h','hi.holidayId','=','h.id')
                ->select('h.name as hname','hi.pTravFrom','hi.pStarDate','hi.id','hi.pEndDate','hi.adults','children','hi.infants','hi.description','hi.passName','hi.pEmail','hi.Contnumber','hi.created_at')
                ->orderBy('created_at', 'desc')
                ->get();
        return view('/back-panel/holiday_inquiry',['holidays'=> $show]);
    }

    public function destroyHolidayInquiry($id){
        $hotel = holidayInquiry::where('id',$id)->first();
        $hotel->delete();
        return back()->withsuccess('holiday Inquiry Deleted !!!');
    }
}
