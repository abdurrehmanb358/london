<?php

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\hotelController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\FlightInquiryController;
use App\Http\Controllers\showImageScrollerController;
use App\Http\Controllers\umrah_pakages;

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

Route::get('flihgtlisting', function () {
    return view('layouts.flihgtlisting');
});
Route::get('hotal', function () {
    return view('layouts.hotal');
});
Route::get('holiday', function () {
    return view('layouts.holilday');
});
Route::get('aboutus', function () {
    return view('layouts.Aboutus');
});
Route::get('personal', function () {
    return view('layouts.personal');
});

//img controller
// routes/web.php


Route::get('/image-scroller', [showImageScrollerController::class, 'showImageScroller'])->name('image.scroller');



Route::get('/', [FlightController:: class , 'getFlights'])->name('homepage');

Route::get('add-roles', function () {
    $roles = [
     [ 'name'=>'Admin' , 'guard_name'=>'web'],
     [ 'name'=>'Data Enter' , 'guard_name'=>'web'],
     [ 'name'=>'Mangner' , 'guard_name'=>'web'],
    ];
    $role = Role::insert($roles);
    return 'success';
});

// Users Curd//
Route::get('back-panel/users', [userController ::class, 'index'])->name('user.index');
Route::get('back-panel/user', [userController ::class, 'create'])->name('user.create');
Route::post('back-panel/users/create', [userController ::class, 'store'])->name('user.store');
Route::get('back-panel/users/{user}/edit', [userController ::class, 'edit'])->name('user.edit');
Route::put('back-panel/users/{user}/edit', [userController ::class, 'update'])->name('user.update');
Route::delete('back-panel/users/{user}/delete', [userController ::class, 'destroy'])->name('user.destroy');


/// Flight curd\\\
Route::get('back-panel/flight', [FlightController ::class, 'index'])->name('flight.index');
Route::get('back-panel/user1', [FlightController ::class, 'create'])->name('flight.create');
Route::post('back-panel/flight/create', [FlightController ::class, 'store'])->name('flight.store');
Route::get('back-panel/flight/{flight}/edit', [FlightController ::class, 'edit'])->name('flight.edit');
Route::put('back-panel/flight/{flight}/edit', [FlightController ::class, 'update'])->name('flight.update');
Route::delete('back-panel/flight/{flight}/delete', [FlightController ::class, 'destroy'])->name('flight.destroy');
Route::get('flightdetail', function () {
    return view('layouts.flightdetail');
});
Route::get('/flightdetail/{flight}', [FlightController::class, 'show1'])->name('flights.show');

// Route ::POST('/flightlisting', [FlightController::class, 'search'])->name('flight.search');

Route::get('/get-flights', [FlightController::class, 'get'])->name('get.flights');

Route::get('/flightlisting',[FlightController::class, 'getFlight'])->name('getflights');
Route::get('/flightlistpage/{id}', [FlightController::class, 'getFlishtView'])->name('getListeview');


Route::get('/layouts/{id}/showflight',[FlightController::class,'showflight']);







/// Hotals///
Route::get('/back-panel/hotel', [hotelController::class, 'index'])->name('hotel.index');
Route::get('/back-panel/hotel/create', [hotelController::class, 'create'])->name('hotel.create');
Route::post('/back-panel/hotel/store', [hotelController::class, 'store'])->name('hotel.store');
Route::get('/back-panel/hotels/{id}/edit',[hotelController::class,'edit'])->name('hotel.edit');
Route::put('/back-panel/hotel/{id}/update',[hotelController::class,'update'])->name('hotel.update');
Route::get('/back-panel/hotel/{id}/delete',[hotelController::class,'destroy']);

Route::get('Hotel_listing',[hotelController::class, 'Hotel_listing'])->name('hotel_listing');


Route::get('/layouts/{id}/show',[hotelController::class,'show']);

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

Route::get('Umrah_listing',[umrah_pakages::class, 'Umrah_listing'])->name('Umrah_listing');


Route::get('/layouts/{id}/Umrah_Detail',[umrah_pakages::class,'Umrah_Detail']);

// // search rout
// Route::post('/search', [umrah_pakages::class, 'search']);

// Route::get('/Home',[umrah_pakages::class, 'Home'])->name('layouts.index');

// Route::get('Inquairy',[umrah_pakages::class, 'searchHotels'])->name('layouts.Hotel_listing');

require('admin.php');
