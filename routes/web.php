<?php

use Illuminate\Support\Facades\Route;

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


/*Route::get('/', function () {
    return view('/project/admin/adminhome');
})->name('adminhome');

*/
Route::get('/', function () {
    return view('/project/public/home');
})->name('home');

/*Route::get('/Home', function () {
    return view('/project/public/home');
});
*/
Route::get('/Home', function () {
    return view('/project/admin/adminhome');
});

Route::get('/About', function () {
    return view('/project/public/about');
});

Route::get('/Services', function () {
    return view('/project/public/services');
});

Route::get('/Gallery', function () {
    return view('/project/public/gallery');
});

Route::get('/Product', function () {
    return view('/project/public/product');
});

Route::get('/Rent', function () {
    return view('/project/public/rent');
});

Route::get('/Booking', function () {
    return view('/project/public/booking');
});

