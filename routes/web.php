<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\BjwelController;
use App\Http\Controllers\PjwelController;
use App\Http\Controllers\BdlwrController;
use App\Http\Controllers\PwrController;
use App\Http\Controllers\CarteController;

//use App\Http\Controllers\RatingController;
use App\Http\Controllers\Admin\RatingController;

use App\Http\Controllers\bookingPediController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HairstrController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ServiceController;
use App\Models\Employee;
use App\Models\Owner;

use App\Models\BookedAppointment;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeDashBoardController;
use App\Http\Controllers\EmployeeLeaveController;
use App\Http\Controllers\HomeTryController;

use Illuminate\Auth\AuthManager;
use SebastianBergmann\CodeCoverage\Report\Html\CustomCssFile;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
use App\Mail\EmployeeRegistered;
use App\Http\Controllers\RequestEmployeeLeaveController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EventCalendarController;
use App\Http\Controllers\UploadimageController;
use App\Models\EventCalendar;
<<<<<<< Updated upstream

//use App\Http\Controllers\Admin\RatingController;
//use App\Http\Controllers\Front\RatingController as ;

=======
use App\Models\Renteditems;
>>>>>>> Stashed changes
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

//Products Adding Routes begin
Route::get('Index1',[HairstrController::class,'index1']);
Route::get('Create11',[HairstrController::class,'create11']);
Route::post('Create11',[HairstrController::class,'store']);
Route::get('Edit1/{id}',[HairstrController::class,'edit1']);
Route::get('Delete1/{id}',[HairstrController::class,'delete1']);
Route::put('Update1/{id}', [HairstrController::class, 'update1']);
Route::post('/products', [ProductController::class, 'store'])->name('cartstore');

//Rating********


Route::get('/Home', function () {
    return view('/project/public/home');
});
Route::get('/About', function () {
    return view('/project/public/about');
});
Route::get('/Services', function () {
    return view('/project/public/services');
});

/*******************************gallery*****************************/
/*******************************************************************/
Route::get('/Gallery', function () {
    return view('/project/public/gallery');
});
Route::get('/Gallery/FACE-AND-TREATMENT', function () {
    return view('/project/public/galleryfaceandtreament');
});
Route::get('/Gallery/Hair', function () {
    return view('/project/public/galleryhair');
});
Route::get('/Gallery/Party-wear', function () {
    return view('/project/public/gallerypartywear');
});
Route::get('/Gallery/Bridal', function () {
    return view('/project/public/gallerybridal');
});
Route::get('/Gallery/Tattoo', function () {
    return view('/project/public/gallerytattoo');
});
Route::get('/Gallery/Jewelry', function () {
    return view('/project/public/galleryjewelry');
});


/*******************************gallery*****************************/
/*******************************************************************/
Route::get('/Product', function () {
    return view('/project/public/product');
});

//addind products
Route::get('/Create11', function () {
    return view('/project/public/create11');
});
Route::get('/Product/HairStraghtening', function () {
    return view('/project/public/producthairstr');
});
Route::get('/Product/HairColoring&Highliting', function () {
    return view('/project/public/productcolor');
});
Route::get('/Product/HairTreatment', function () {
    return view('/project/public/producthairt');
});
Route::get('/Product/Facial&CleanUp', function () {
    return view('/project/public/productfacial');
});
Route::get('/Product/Cart', function () {
    return view('/project/public/cart');
});
Route::get('/Product/ManageCart', function () {
    return view('/project/public/managecart');
});
Route::get('/Product/MakePurchase', function () {
    return view('/project/public/makepurchase');
});
Route::get('/Rent', function () {
    return view('/project/public/rent');
});

Route::middleware(['auth', 'role:owner'])->group(function () {
Route::get('/owner', function () {
    $message = "";
    return view('/project/owner/owner', compact('message'));
});
});
Route::get('/Register', function () {
    return view('/project/public/register');
});

Route::get('/LogIn', function () {
    return view('/project/public/login');
});

// IMAGE - CRUD ***********************************************
Route::get('uploadimage', [UploadimageController::class, 'imageUp']);
Route::get('add-uploadimage', [UploadimageController::class, 'create']);
Route::post('add-uploadimage', [UploadimageController::class, 'store']);
// Route::get('/Dashboard-Customer', function () {
//     return view('/project/customer/dashboard');
// })->name('customer.dashboard');


// Route::get('/Home-Customer', function () {
//     return view('/project/customer/home');
// })->name('customer.home');
// ->middleware('customer.auth');



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

Route::get('/rentbridalwr', function () {
    return view('/project/public/rentbridalwr');
});

Route::get('/rentbridalwrgl', function () {
    return view('/project/public/rentbridalwrgl');
});

Route::get('/rentbridalwrgl1', function () {
    return view('/project/public/rentbridalwrgl1');
});

Route::get('/create', function () {
    return view('/project/public/create');
});

Route::get('/create1', function () {
    return view('/project/public/create1');
});

Route::get('/create3', function () {
    return view('/project/public/create3');
});

Route::get('/create4', function () {
    return view('/project/public/create4');
});

Route::get('/rentbridlwrdisplay', function () {
    return view('/project/public/rentbridlwrdisplay');
});






Route::get('add-bjwel', [BjwelController::class,'create']);
Route::post('add-bjwel', [BjwelController::class,'store']);

Route::get('add-pjwel', [PjwelController::class,'create1']);
Route::post('add-pjwel', [PjwelController::class,'store']);

Route::get('add-bdlwr', [BdlwrController::class, 'create3']);
Route::post('add-bdlwr', [BdlwrController::class, 'store']);

Route::get('add-pwr', [PwrController::class, 'create4']);
Route::post('add-pwr',[PwrController::class, 'store']);

Route::get('/bdlwrs', [BdlwrController::class, 'index']);

Route::get('/bjwel', [BjwelController::class, 'index']);
Route::get('/pwr', [PwrController::class, 'index']);
Route::get('/pjwel', [PjwelController::class, 'index']);








Route::get('carte', [PwrController::class, 'carte'])->name('carte');
Route::post('padd-to-cart/{id}', [PwrController::class, 'addToCart'])->name('padd_to_cart');
Route::patch('update-cart', [PwrController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [PwrController::class, 'remove'])->name('remove_from_cart');

Route::get('/bdlwrs', [BdlwrController::class, 'index']);
Route::get('carte', [BdlwrController::class, 'carte'])->name('carte');
Route::post('add-to-cart/{id}', [BdlwrController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [BdlwrController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [BdlwrController::class, 'remove'])->name('remove_from_cart');


Route::get('carte', [BjwelController::class, 'carte'])->name('carte');
Route::get('bjwadd-to-cart/{id}', [BjwelController::class, 'addToCart'])->name('bjwadd_to_cart');
Route::patch('update-cart', [BjwelController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [BjwelController::class, 'remove'])->name('remove_from_cart');


Route::get('/cart/checkout', [CarteController::class, 'showCheckout'])->name('cart.checkout');
Route::get('/cart/checkout-info', [CarteController::class, 'showCheckoutInfo'])->name('cart.checkout.info');






Route::get('/Booking-Customer', function () {
    return view('/project/customer/booking');
})->name('customer.booking');
//     Route::get('/Booking-Customer', function () {
//     return view('/project/customer/booking');
// })->name('customer.booking');


Route::get('/edit-profile', 'ProfileController@edit')->name('edit-profile');

// routes/web.php

use App\Http\Controllers\AppointmentController;

// Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');

use App\Http\Controllers\BookingController;

use App\Http\Controllers\Front\RatingController as FrontRatingController;

Route::get('/reviewform', function () {
    return view('/project/public/reviewform');
});
//Add Rating/Review
Route::post('add-rating', [FrontRatingController::class, 'addRating'])->name('add-rating');

// Other routes...

// Use the 'index' method for the '/BookNow' route
Route::get('/BookNow', [BookingController::class, 'index'])->name('booking.index');

// // Define a route for fetching services based on the selected category
// Route::get('/api/services/{category}', [BookingController::class, 'getServices']);

 Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

// Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');

// Route::get('/bookings/{category}', [BookingController::class, 'show'])->name('bookings.show');

// Add other routes as needed


// Use the 'serviceCategories' method for the '/BookNow/categories' route
// Route::get('/BookNow/categories', [BookingController::class, 'serviceCategories'])->name('booking.categories');




// Route::get('/BookNow', function () {
//     return view('/project/customer/booking');
// })->name('customer.booking');
// Add other routes as needed


/*--------- End of Customer Routes ----------*/

/*-------- Starter of Admin Routes ---------*/



/*-------- End of Admin Routes ----------*/

/*************************************************************/
/****************EMPLOYEE ROUTE BEGIN*************************/
/************************************************************/
//Route::middleware(['employee_protect'])->group(function () {
    //Route::get('/employee-dashboard', EmployeeDashBoardController::class)->name('employee.dashboard');

    Route::get('/employee-dashboard',function(){
        return view('/project/employee/dashboard');
    });
    
    Route::get('/employee-meetings', function () {
        return view('/project/employee/meetings');
    });

    //Route::get('/employee-leaves', [EmployeeLeaveController::class, 'employeeDetails'])->name('employee.leaves');

    Route::get('/employee-apoinments', function () {
        return view('/project/employee/appoinments');
    });

    Route::get('/employee-holidays', function () {
        return view('/project/employee/holidays');
    });

    Route::get('/employee-profile', function () {
        return view('/project/employee/profile');
    });

    Route::get('/employee-leaves', function () {
        return view('/project/employee/leaves');
    });

    //Route::get('/employee-profile', [ProfileController::class, 'editProfile'])
    //->name('employee.profile');

    //Route::put('/update-profile/{id}', [ProfileController::class, 'updateProfile'])
    //->name('update-profile');

    //Route::get('/employee-leave-request', [EmployeeLeaveController::class, 'employeeDetails'])
    //->name('employee.leave.request');

    //Route::post('/employee-leave-request', [EmployeeLeaveController::class, 'requestLeave'])
    //->name('employee.leave.request.form');
//});
/***********************************************************/
/****************EMPLOYEE ROUTE END*************************/
/***********************************************************/


Auth::routes();




/*-------- Starter of Employee Routes ---------*/
    // Route::get('/Dashboard-Employee', function () {
    //     return view('resources\views\project\employee\dashboard');
    // });

/*-------- End of Employee Routes ---------*/





/*-------- Starter of Employee Routes ---------*/

Route::get('/dashboard', function () {
    return view('/project/employee/dashboard');
});

Route::get('/emplLeave', function () {
    return view('project\employee\Leave\emplLeave');
});

//leave requesting proccess





//Route::get('/employee/{id}/leave-requests', [EmployeeController::class, 'leaveRequests']);



/*-------- End of Employee Routes ----------*/

Auth::routes();










/*-------- manage appoinment form --------*/
Route::get('/manage_appoinment',[ShowController::class,'showAppointment']);





Route::get('/geteventcalendar',[EventCalendarController::class,'geteventcalendar']);
Route::get('/createeventcalendar',[EventCalendarController::class,'createeventcalendar']);
Route::get('/deleteeventcalendar',[EventCalendarController::class,'deleteeventcalendar']);

Route::get('/', function () {
    return view('project.public.home');
});

Route::get('/dashboard', function () {
    return view('project.customer.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'auth.role:owner'])->group(function () {
    route::get('/Dashboard',[HomeTryController::class, 'index']);
    
    Route::get('/Leave-Request', [RequestEmployeeLeaveController::class, 'index']);
    Route::post('/submit-leave-request', [RequestEmployeeLeaveController::class, 'submitLeaveRequest']);
    Route::any('/accept-leave/{id}', [RequestEmployeeLeaveController::class, 'acceptLeave'])->name('acceptLeave');
    Route::delete('/reject-leave/{id}', [RequestEmployeeLeaveController::class, 'rejectLeave'])->name('rejectLeave');

    Route::get('/Manage-Salary', function () {
        return view('/project/owner/salary-management/index');
    });

    Route::get('/Feedbacks', function () {
        return view('/project/owner/feedbacks');
    });

    Route::get('/Profile', function () {
        return view('/project/owner/profile/create');
    });

    Route::get('/Full-Report', function () {
        return view('/project/owner/report');
    });

    Route::get('/Settings', function () {
        return view('/project/owner/settings');
    });

    //Ratings
    Route::get('/ratings', function () {
        return view('resources/views/project/owner/ratings/ratings');
    });
    //Route::get('ratings', 'RatingController@index')->name('ratings');
    Route::get('ratings', [RatingController::class, 'ratings']);


    /*-----employee button route-----*/
    Route::resource('employee', EmployeeController::class)->names([
        'index' => 'project.owner.Employee.index',
    ]);

    Route::resource('service', ServiceController::class)->names([
        'index' => 'project.owner.service.index',
        'create' => 'project.owner.service.create',
        'store' => 'project.owner.service.store',
        'edit' => 'project.owner.service.edit',
        'update' => 'project.owner.service.update',
        'destroy' => 'project.owner.service.destroy',
    ]);

    /*--------add service button route----*/
    Route::get('/servicecreate', function () {
        return view('/project/owner/service/create');
    });

    /*--------add employee button route----*/
    Route::get('/addemployee', function () {
        return view('/project/owner/employee/create');
    });

    /*-------add rent product button route----*/
    Route::get('/rentitems', function () {
        return view('/project/owner/rentproduct/index');
    });

    Route::get('/backtodashboard', function () {
        return view('/project/owner/owner');
    });

    //web setting part
    Route::get('/salon-details', function(){
        return view('/project/owner/web-settings/salon-index');
    });

    Route::get('/home-page', function(){
        return view('/project/owner/web-settings/home-index');
    });

    Route::get('/gallery-page', function(){
        return view('/project/owner/web-settings/gallery-index');
    });

    Route::get('/service-page', function(){
        return view('/project/owner/web-settings/service-index');
    });

    Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employee.index');
    Route::post('/employees', [EmployeeController::class, 'store'])->name('employee.store');

    Route::post('/storeownerdata', [OwnerController::class, 'store'])->name('storeownerdata');

    /*----owner-report-part-----*/
    Route::get('/Full-Report',[OwnerController::class,'showTtls'])->name('owner.report');

    /*--------Salary management system route----------*/
    Route::get('/employeeleave', function () {
        return view('/project/owner/manage-holidays&leaves/create');
    });

    Route::get('/viewemployee_salary', function () {
        return view('/project/owner/salary-management/show');
    });
});

Route::middleware(['auth', 'auth.role:admin'])->group(function () {
    route::get('/Dashboard',[HomeTryController::class, 'index']);
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

    
    
    /*-------- customer data form --------*/
    Route::get('/customer_details',[ShowController::class,'show']);

    /*-------- product data form --------*/
    Route::get('/manage_product',[ShowController::class,'item']);
    Route::get('/manage_rented_item',[ShowController::class,'cell']);
    Route::get('/returned_rented_item',[ShowController::class,'rent']);


});

Route::get('/dashboard', function () {
    return view('project.customer.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'auth.role:owner'])->group(function () {
    route::get('/HomeTry/Owner',[HomeTryController::class, 'owner']);
});

 route::get('/Dashboard',[HomeTryController::class, 'index']);

 

require __DIR__.'/auth.php';