<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


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


Route::get('/Register', function () {
    return view('/project/public/register');
});

Route::get('/LogIn', function () {
    return view('/project/public/login');
});

Route::get('/Home_Customer', function () {
    return view('/project/customer/home');
})->name('customer_home');

Auth::routes();

Route::get('/login', [App\Http\Controllers\CustomerController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\CustomerController::class, 'loginPost'])->name('login.post');





Route::controller(CustomerController::class)->group(function (){
    Route::get('/AddCustomer', [App\Http\Controllers\CustomerController::class, 'AddCustomer'])->name('register');
    Route::post('/saveCustomer','registrationPost')->name('registration.post');
     Route::get('/verify/{token}', [App\Http\Controllers\CustomerController::class, 'verify'])->name('verification.verify');
});
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return view('home', ['layout' => 'main']);
});

Route::get('/logout', [App\Http\Controllers\CustomerController::class, 'logout'])->name('logout');
