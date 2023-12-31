<?php

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\umrah_pakages;
use App\Http\Controllers\MailController;
use App\Http\Controllers\userController;
use App\Http\Controllers\hotelController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\showImageScrollerController;
use App\Http\Controllers\holidayController;
use App\Http\Controllers\SpreadsheetExportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




// add roles
Route::get('add-roles', function () {
    $roles = [
     [ 'name'=>'Admin' , 'guard_name'=>'web'],
     [ 'name'=>'Data Enter' , 'guard_name'=>'web'],
     [ 'name'=>'Mangner' , 'guard_name'=>'web'],
    ];
    $role = Role::insert($roles);
    return 'success';
});




// simple view return
Route::get('insurance', function () {
    return view('layouts.insurance')->name('layouts.insurance');
});

Route::get('insurancesearch', function () {
    return view('layouts.insurancesearch');
});
Route::get('holiii', function () {
    return view('layouts.holidayDetail');
});


//img controller
// routes/web.php


Route::get('/image-scroller', [showImageScrollerController::class, 'showImageScroller'])->name('image.scroller');
Route::get('/layouts.flight',[FlightController::class,'flight'])->name('flights');


Route::get('/', [FlightController:: class , 'getFlights'])->name('homepage');



// Users Curd//

/// Flight curd\\\
Route::get('back-panel/flight', [FlightController ::class, 'index'])->name('flight.index');
Route::get('back-panel/user1', [FlightController ::class, 'create'])->name('flight.create');
Route::post('back-panel/flight/create', [FlightController ::class, 'store'])->name('flight.store');
Route::get('back-panel/flight/{flight}/edit', [FlightController ::class, 'edit'])->name('flight.edit');
Route::put('back-panel/flight/{flight}/update', [FlightController ::class, 'update'])->name('flight.update');
Route::delete('back-panel/flight/{flight}/delete', [FlightController ::class, 'destroy'])->name('flight.destroy');
Route::get('flightdetail', function () {
    return view('layouts.flightdetail');
});
Route::get('/flightdetail/{flight}', [FlightController::class, 'show1'])->name('flights.show');

Route::get('/flightlisting', [FlightController::class, 'searchflight'])->name('flight.search');

Route::get('/get-flights', [FlightController::class, 'get'])->name('get.flights');

Route::get('/flightlistingpage',[FlightController::class, 'getFlight'])->name('getflights');
Route::get('/flightlistpage/{id}', [FlightController::class, 'getFlishtView'])->name('getListeview');


Route::get('/layouts/{id}/showflight',[FlightController::class,'showflight']);
Route::get('/flightshow',[FlightController::class,'search'])->name('search');
Route::get('flightlisting',[FlightController::class, 'flight_listing'])->name('flight_listing');
Route::get('/inquairyflight', [FlightController::class, 'searchflight'])->name('flightsearching');




/// Hotals///
Route::get('/back-panel/hotel', [hotelController::class, 'index'])->name('hotel.index');
Route::get('/back-panel/hotel/create', [hotelController::class, 'create'])->name('hotel.create');
Route::post('/back-panel/hotel/store', [hotelController::class, 'store'])->name('hotel.store');
Route::get('/back-panel/hotels/{id}/edit',[hotelController::class,'edit'])->name('hotel.edit');
Route::put('/back-panel/hotel/{id}/update',[hotelController::class,'update'])->name('hotel.update');
Route::get('/back-panel/hotel/{id}/delete',[hotelController::class,'destroy']);

Route::get('hotel',[hotelController::class, 'Hotel_listing'])->name('hotel');

Route::get('/hotel/details/{id}',[hotelController::class,'show']);

// search rout
Route::post('/search', [hotelController::class, 'search']);

Route::get('/Home',[hotelController::class, 'Home'])->name('layouts.index');

Route::get('Inquairy',[hotelController::class, 'searchHotels'])->name('layouts.Hotel_listing');


// Umrah pakages

Route::get('/back-panel/umrah_pakage', [umrah_pakages::class, 'index'])->name('umrah.index');
Route::get('/back-panel/umrah_pakage/create', [umrah_pakages::class, 'create'])->name('hotel.create');
Route::post('/back-panel/umrah_pakage/store', [umrah_pakages::class, 'store'])->name('umrah.store');
Route::get('/back-panel/umrah_pakage/{id}/edit',[umrah_pakages::class,'edit'])->name('umrah.edit');
Route::put('/back-panel/umrah_pakage/{id}/update',[umrah_pakages::class,'update'])->name('umrah.update');
Route::get('/back-panel/umrah_pakage/{id}/delete',[umrah_pakages::class,'destroy']);

Route::get('umrah',[umrah_pakages::class, 'Umrah_listing'])->name('umrah');


Route::get('/umrah/detail/{id}',[umrah_pakages::class,'Umrah_Detail']);

// Inquiries
Route::post('/register/inquiries',[umrah_pakages::class,'register'])->name('umrah.inquiries');
Route::post('/hotel/inquiry',[umrah_pakages::class,'hotelInquiry'])->name('hotel.inquiries');
Route::post('/flight/inquiry',[FlightController::class,'flightInquiries'])->name('flights.inquiry');
Route::post('/holiday/inquiry',[holidayController::class,'holidayInquiry'])->name('holiday.inquiries');
Route::post('back-panel/insuranceinquiry', [InsuranceController ::class,'insuranceInquiries'])->name('insurance.inquiry');

//inquiries Show
Route::get('/back-panel/umrah_inquiry', [umrah_pakages::class, 'umrah_inquiry'])->name('umrah.inquiry');
Route::get('/back-panel/hotel_inquiry', [umrah_pakages::class, 'hotel_inquiry'])->name('hotel.inquiry');
Route::get('/back-panel/flight_inquiry', [FlightController::class, 'flight_inquiry'])->name('flight.inquiries');
Route::get('/back-panel/holiday_inquiry', [holidayController::class, 'holiday_inquiry'])->name('holiday.inquiry');


// Delete Inquiries
Route::get('holidayInquiry/{id}/delete', [holidayController ::class, 'destroyHolidayInquiry']);
Route::get('umrahInquiry/{id}/delete', [umrah_pakages ::class, 'destroyUmrahInquiry']);
Route::get('hotelInquiry/{id}/delete', [hotelController ::class, 'destroyHotelInquiry']);
Route::get('flightInquiry/{id}/delete', [FlightController ::class, 'destroyFlightInquiry']);
Route::get('insuranceInquiry/{id}/delete', [InsuranceController ::class, 'destroyinsuranceInquiry']);




// Email
Route::any('send-mail',[MailController::class,'index'])->name('hotel.inquiries');




// insurance curd
Route::get('/back-panel/insurance', [InsuranceController::class, 'index'])->name('insurance.index');
Route::get('/back-panel/insurance_create', [InsuranceController::class, 'create'])->name('insurance.create');
Route::get('/back-panel/insurance_store', [InsuranceController::class, 'store'])->name('insurance.store');
Route::get('/back-panel/insurance/{insurance}/edit',[InsuranceController::class,'edit'])->name('insurance.edit');
Route::get('/back-panel/insurance/{insurance}/update', [InsuranceController::class, 'update'])->name('insurance.update');
Route::delete('back-panel/insurance/{insurance}/delete', [InsuranceController ::class, 'destroy'])->name('insurance.destroy');
Route::get('insurance', [InsuranceController ::class, 'simple'])->name('layouts.insurance');
Route::get('Aboutus', [InsuranceController ::class, 'Aboutus'])->name('layouts.aboutus');
 Route::get('all_insurance', [InsuranceController ::class,'getinsurance'])->name('layouts.allinsurance');
 Route::get('sab_insurance{id}', [InsuranceController ::class,'applyinsurance'])->name('layouts.subinsurance');
 Route::get('insurance_detail', [InsuranceController ::class,'insurance'])->name('back-panel.insurance');


//Holidays CRUD
Route::get('/back-panel/holiday', [holidayController::class, 'index'])->name('holiday.index');
Route::get('/back-panel/holiday/create', [holidayController::class, 'create'])->name('holiday.create');
Route::post('/back-panel/holiday/store', [holidayController::class, 'store'])->name('holiday.store');
Route::get('/back-panel/holiday/{id}/edit',[holidayController::class,'edit'])->name('holiday.edit');
Route::put('/back-panel/holiday/{id}/update',[holidayController::class,'update'])->name('holiday.update');
Route::get('/back-panel/holiday/{id}/delete',[holidayController::class,'destroy']);
Route::get('/holiday',[holidayController::class, 'holidayListing'])->name('holiday');
Route::get('/holiday/all',[holidayController::class, 'holidayListing2'])->name('holiday/all');
Route::get('/holiday/detail/{id}',[holidayController::class,'Holiday_Detail']);


//Export Data From BackPanel
Route::get('exportHotelInquiry', [SpreadsheetExportController::class, 'exportHotelInquiry']);
Route::get('exportUmrahInquiry', [SpreadsheetExportController::class, 'exportUmrahInquiry']);
Route::get('exportHolidayInquiry', [SpreadsheetExportController::class, 'exportHolidayInquiry']);
Route::get('exportFlightInquiry', [SpreadsheetExportController::class, 'exportFlightInquiry']);
Route::get('exportInsuranceInquiry', [SpreadsheetExportController::class, 'exportInsuranceInquiry']);


Route::get('/admin', function () {
    return view('back-panel.dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Route::get('', function () {
//     return view('admin');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('admin',function(){
        return view('back-panel.dashboard');
    });
    Route::get('back-panel/users', [userController ::class, 'index'])->name('user.index');
    Route::get('back-panel/user', [userController ::class, 'create'])->name('user.create');
    Route::post('back-panel/users/create', [userController ::class, 'store'])->name('user.store');
    Route::get('back-panel/users/{user}/edit', [userController ::class, 'edit'])->name('user.edit');
    Route::put('back-panel/users/{user}/edit', [userController ::class, 'update'])->name('user.update');
    Route::delete('back-panel/users/{user}/delete', [userController ::class, 'destroy'])->name('user.destroy');
    
    




    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
