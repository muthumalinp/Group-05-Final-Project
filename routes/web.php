<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

use App\Models\BookedAppointment;

use Illuminate\Auth\AuthManager;
use SebastianBergmann\CodeCoverage\Report\Html\CustomCssFile;
use Illuminate\Support\Facades\Auth;

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
    return view('/project/admin/owner');
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
    return view('/project/owner/owner');
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

Route::get('/Gallery/Hair', function () {
    return view('/project/public/galleryhair');
});

Route::get('/Product', function () {
    return view('/project/public/product');
});

Route::get('/Rent', function () {
    return view('/project/public/rent');
});

/*
Route::get('/home', function () {
    return view('/project/admin/admin_home');
});
*/

Route::get('/owner', function () {
    $message = "";
    return view('/project/owner/owner', compact('message'));
});

Route::get('/admin_home', function () {
    $message = "";
    return view('/project/admin/admin_home', compact('message'));
});




Route::get('/manage_appointment', function () {
    return view('/project/admin/manage_appoinment');
});

Route::get('/manage_product', function () {
    return view('/project/admin/manage_product');
});

Route::get('/view_profile', function () {
    return view('/project/admin/view_profile');
});

Route::get('/customer_details', function () {
    return view('/project/admin/customer_details');
});

Route::get('/manage_rented_item', function () {
    return view('/project/admin/manage_rented_item');
});

Route::get('/setting', function () {
    return view('/project/admin/setting');
});



Route::get('/bookingFaci', function () {
    return view('/project/public/includ/bookingFaci');
});
Route::get('/bookingDres', function () {
    return view('/project/public/includ/bookingDres');
});
Route::get('/bookingPedi', function () {
    return view('/project/public/includ/bookingPedi');
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


/*-------Starter of Customer Routes---------*/


Route::get('/Home-Customer', function () {
    return view('/project/customer/home');
})->name('customer.home')->middleware('customer.auth');


    Route::get('/About-Customer', function () {
    return view('/project/customer/about');
})->name('customer.about');

    Route::get('/Services-Customer', function () {
    return view('/project/customer/services');
})->name('customer.services');

    Route::get('/Gallery-Customer', function () {
    return view('/project/customer/gallery');
})->name('customer.gallery');

    Route::get('/Gallery/Hair-Customer', function () {
    return view('/project/customer/galleryhair');
})->name('customer.hair');

    Route::get('/Product-Customer', function () {
    return view('/project/customer/product');
})->name('customer.product');

    Route::get('/Rent-Customer', function () {
    return view('/project/customer/rent');
})->name('customer.rent');

    Route::get('/Booking-Customer', function () {
    return view('/project/customer/booking');
})->name('customer.booking');


Route::post('/booking',function() {
    $booked_appointments = new BookedAppointment();
    $booked_appointments->fuName = request('fuName');
    $booked_appointments->eMail = request('eMail');
    $booked_appointments->nbrCode = request('nbrCode');
    $booked_appointments->phone = request('phone');
    $booked_appointments->contact = request('contact');
    $booked_appointments->massage = request('massage');
    $booked_appointments->save();
    
});

/*--------- End of Customer Routes ----------*/


/*--------- End of Customer Routes ----------*/


Auth::routes();

Route::get('/login', [App\Http\Controllers\CustomerController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\CustomerController::class, 'loginPost'])->name('login.post');





Route::get('/LogIn', [App\Http\Controllers\AuthController::class, 'login'])->name('Login');
    Route::post('/LogIn', [App\Http\Controllers\AuthController::class, 'loginPost'])->name('login.post');

Route::controller(AuthController::class)->group(function (){
    Route::get('/AddUser', [App\Http\Controllers\AuthController::class, 'AddUser'])->name('register');
    Route::post('/saveUser','registrationPost')->name('registration.post');
    Route::get('/verify/{token}', [App\Http\Controllers\AuthController::class, 'verify'])->name('verification.verify');
    Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});