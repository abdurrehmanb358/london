<?php

namespace App\Http\Controllers;

use App\Models\hotelInquiries;
use App\Models\umrah_inquiries;
use App\Models\umrah_inquiry;
use App\Models\umrah_pakages as umrah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class umrah_pakages extends Controller
{
    public function index() {
        $umrah = umrah::orderBy('created_at', 'desc')->get();
        return view('/back-panel/umrah_pakage/index',['pakages'=> $umrah ]);
    }
    public function create(){
        return view('back-panel.umrah_pakage.create');
    }
    public function store(Request $request){

        // Validate Data
        $request->validate([
            'discription' => 'required',
            'image1' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            'image2' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            'image3' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            'days' => 'required',
            'nights' => 'required'
        ]);

    

        // upload Image
        $imageName = time() . '.' . $request->image1->extension();
        $request->image1->move(public_path('hotels'), $imageName);

        $imageName1 = time() . '.' . $request->image2->extension();
        $request->image2->move(public_path('hotels'), $imageName1);

        $imageName2 = time() . '.' . $request->image3->extension();
        $request->image3->move(public_path('hotels'), $imageName2);


        $finalImage = $imageName . ',' . $imageName1 . ',' . $imageName2;


        $umrah = new umrah;
        $umrah->image = $finalImage;
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
         $slide = explode(',',$umrah->image);
         $img1 =isset($slide[0])?$slide[0]:'';
         $img2 =isset($slide[1])?$slide[1]:'';
         $img3 =isset($slide[2])?$slide[2]:'';
         
        // upload Image
        if(isset($request->image1)){
            $imageName1 = time() . '_image1.' . $request->image1->extension();
            $request->image1->move(public_path('hotels'), $imageName1);
            $img1 = $imageName1;
            $finalImage = $img1 ;
            $umrah->image = $finalImage;
           
        }
        if(isset($request->image2)){
            $imageName2 = time() . '_image2.' . $request->image2->extension();
            $request->image2->move(public_path('hotels'), $imageName2);
            $img2 = $imageName2;
            $finalImage = $img1 . ',' . $img2 ;
        $umrah->image = $finalImage;
        }
        if(isset($request->image3)){
            $imageName3 = time()  . '_image3.' . $request->image3->extension();
            $request->image3->move(public_path('hotels'), $imageName3);
            $img3 = $imageName3;
            $finalImage = $img1 . ',' . $img2 . ',' . $img3;
        $umrah->image = $finalImage;
        
        

        }

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
        return view('layouts.umrah_listing',['pakages'=> umrah::orderBy('created_at', 'desc')->simplePaginate(10)]);
    }
    public function Umrah_Detail($id){
        $umra = umrah::where('id',$id)->first();
        $slides = explode(',',$umra->image);
        return view('layouts.umrah_detail', ['umra'=> $umra,'slide'=>$slides]);
    }
    public function register(Request $request )
    {
        $request->validate([
            'name' => 'required',
            'email' => 'nullable|email', // Use 'nullable' instead of 'optional'
            'phone' => 'required',
            'date' => 'required',
            'nop' => 'required'
        ]);
        $name = $request->input('name');
        $email= $request->input('email');
        $phone = $request->input('phone');
        $date = $request->input('date');
        $nop = $request->input('nop');
        $packageId = $request->input('packageId');

        $isInserSuccess = umrah_inquiries::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'date' => $date,
            'noOfPerson' => $nop,
            'umrahId' => $packageId,

        ]);

        if($isInserSuccess)
            return redirect()->back()->with('success', 'Inquiry Submitted !!!');
        else
            echo '<h1>Insert failed</h1>';

    }

        public function umrah_inquiry() {
            $showUmrah = DB::table('umrah_inquiries as ui')
            ->join('umrah_pakages as up','ui.umrahId','=','up.id')
            ->select('up.days','ui.name','ui.email','ui.id','ui.phone','ui.noOfPerson','ui.date','ui.created_at')
            ->orderBy('created_at', 'desc')
            ->get();
            return view('/back-panel/umrah_inquiry',['inquiry'=> $showUmrah]);
        }
        public function hotelInquiry(Request $request )
        {
            $request->validate([
                'email' => 'nullable|email', // Use 'nullable' instead of 'optional'
            ]);
            $name = $request->input('name');
            $email= $request->input('email');
            $phone = $request->input('phone');
            $startDate = $request->input('startDate');
            $endDate = $request->input('endDate');
            $travFrom = $request->input('travFrom');
            $description = $request->input('description');
            $hotelId = $request->input('hotelId');



            $isInserSuccess = hotelInquiries::create([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'starDate' => $startDate,
                'endDate' => $endDate,
                'travFrom' => $travFrom,
                'descripyion' => $description,
                'hotelId' => $hotelId,

            ]);

            if($isInserSuccess)
                return redirect()->back()->with('success', 'Inquiry Submitted !!!');
            else
                echo '<h1>Insert failed</h1>';

        }
        public function hotel_inquiry() {
            $show = DB::table('hotel_inquiries as hi')
                    ->join('hotels as h','hi.hotelId','=','h.id')
                    ->select('h.name as hname','hi.name','hi.email','hi.id','hi.phone','hi.travFrom','starDate','hi.endDate','hi.descripyion','hi.created_at')
                    ->orderBy('created_at', 'desc')
                    ->get();
            return view('/back-panel/hotel_inquiry',['hotels'=> $show]);
        }

        
        public function destroyUmrahInquiry($id){
            $hotel = umrah_inquiries::where('id',$id)->first();
            $hotel->delete();
            return back()->withsuccess('Hotel Inquiry Deleted !!!');
        }
}
