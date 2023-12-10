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

use Illuminate\Auth\AuthManager;
use SebastianBergmann\CodeCoverage\Report\Html\CustomCssFile;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
use App\Mail\EmployeeRegistered;

/*Route::get('/test-email', function () {
    $employeeData = ['emp_fname' => 'muthumali', 'emp_email' => 'muthumalinp@gamil.com'];
    Mail::to('muthumalinp@gmail.com')->send(new EmployeeRegistered($employeeData));
    return 'Test email sent successfully';
});*/


use App\Http\Controllers\ProductController;
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



/*Route::get('/', function () {
    return view('/project/admin/owner');
})->name('adminhome');

*/
Route::get('/', function () {
    return view('/project/public/home');
})->name('home');

Route::get('/Home', function () {
    return view('/project/public/home');
});

/*Route::get('/Home', function () {
    return view('/project/owner/owner');
});*/

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
// Route::get('/Index1', function () {
//     return view('/project/public/index1');
// });


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

/*
Route::get('/home', function () {
    return view('/project/admin/admin_home');
});
*/

Route::get('/owner', function () {
    $message = "";
    return view('/project/owner/owner', compact('message'));
});


/*Route::get('/admin_home', function () {
    $message = "";
    return view('/project/admin/admin_home', compact('message'));
});*/



/*-------- start of admin rout --------*/
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
/*-------- end of admin rout --------*/

/*----------Starter of booking servises blade file---------*/

// Route::get('/bookingFaci', function () {
//     return view('/project/public/includ/bookingFaci');
// });
// Route::get('/bookingDres', function () {
//     return view('/project/public/includ/bookingDres');
// });
// Route::get('/bookingPedi', function () {
//     return view('/project/public/includ/bookingPedi');
// });
// Route::get('/Booking', function () {
//     return view('/project/public/booking');
// });

/*----------End of booking servises blade file---------*/


Route::get('/Register', function () {
    return view('/project/public/register');
});

Route::get('/LogIn', function () {
    return view('/project/public/login');
});


/*-------Starter of Customer Routes---------*/

// web.php

// Route::middleware(['checkRole:customer'])->group(function () {
//     Route::get('/customer/dashboard', function () {
//         return view('customer.dashboard');
//     })->name('customer.dashboard');
// });


Route::get('/Dashboard-Customer', function () {
    return view('/project/customer/dashboard');
})->name('customer.dashboard');


Route::get('/Home-Customer', function () {
    return view('/project/customer/home');
})->name('customer.home');
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

// Other routes...

// Use the 'index' method for the '/BookNow' route
Route::get('/BookNow', [BookingController::class, 'index'])->name('booking.index');

// Define a route for fetching services based on the selected category
Route::get('/api/services/{category}', [BookingController::class, 'getServices']);

Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');

Route::get('/bookings/{category}', [BookingController::class, 'show'])->name('bookings.show');

// Add other routes as needed


// Use the 'serviceCategories' method for the '/BookNow/categories' route
// Route::get('/BookNow/categories', [BookingController::class, 'serviceCategories'])->name('booking.categories');




// Route::get('/BookNow', function () {
//     return view('/project/customer/booking');
// })->name('customer.booking');
// Add other routes as needed


/*--------- End of Customer Routes ----------*/

/*-------- Starter of Admin Routes ---------*/

Route::get('/Dashboard-Admin',[CustomerController::class,'showTotalCustomers'])->name('admin.dashboard');

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

/*-------- Starter of Booking form database table ---------*/
// Route::post('/booking',function() {

//     $booked_appointments = new BookedAppointment();
//     $booked_appointments->fuName = request('fuName');
//     $booked_appointments->eMail = request('eMail');
//     $booked_appointments->nbrCode = request('nbrCode');
//     $booked_appointments->phone = request('phone');
//     $booked_appointments->contact = request('contact');
//     $booked_appointments->massage = request('massage');
//     $booked_appointments->save();

// });
/*--------- End of Booking form database table ----------*/







/*--------- End of Customer Routes ----------*/


/*--------- End of Customer Routes ----------*/


Auth::routes();




/*-------- Starter of Employee Routes ---------*/
    Route::get('/Dashboard-Employee', function () {
        return view('resources\views\project\employee\dashboard');
    });

/*-------- End of Employee Routes ---------*/




/*---------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------ Starter of Owner Routes ----------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------------------*/

    Route::get('/Dashboard-Owner', function () {
        return view('/project/owner/owner');
    })->name('owner.dashboard');

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
    Route::get('ratings','RatingController@ratings');

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

    /*-----Route::get('/backtoempindex', function () {
        return view('/project/owner/Employee/index');
    });------*/

    Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employee.index');
    Route::post('/employees', [EmployeeController::class, 'store'])->name('employee.store');

    Route::post('/storeownerdata', [OwnerController::class, 'store'])->name('storeownerdata');

    /*----owner-report-part-----*/
    Route::get('/Full-Report',[OwnerController::class,'showTtls'])->name('owner.report');

    /*---show owner profile-----*/
    /*--Route::get('/dashboard-owner', [OwnerController::class, 'showProfile'])->name('owner.dashboard');--*/



    /*--------Salary management system route----------*/
    Route::get('/employeeleave', function () {
        return view('/project/owner/manage-holidays&leaves/create');
    });

    Route::get('/viewemployee_salary', function () {
        return view('/project/owner/salary-management/show');
    });

    /*---------Route::get('/salary-management', [SalaryManagementController::class, 'index'])->name('project.owner.salary-management.index');---*/
    /*--------Owner Profile route----------*/
    /*--use App\Http\Controllers\ProfileController;

    Route::get('/profile', [App\Http\Controllers\Auth\ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [App\Http\Controllers\Auth\ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [App\Http\Controllers\Auth\ProfileController::class, 'update'])->name('profile.update');--*/

/*-----------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------- End of Owner Routes ---------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------------*/




/*-------- Starter of Employee Routes ---------*/

Route::get('/dashboard', function () {
    return view('/project/employee/dashboard');
});

Route::get('/emplLeave', function () {
    return view('project\employee\Leave\emplLeave');
});

use App\Http\Controllers\RequestEmployeeLeaveController;

Route::post('/submit-leave-request', [RequestEmployeeLeaveController::class, 'store'])->name('leave-request.store');


/*-------- End of Employee Routes ----------*/

Auth::routes();

    Route::get('/LogIn', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('Login');
    Route::post('/LogIn', [App\Http\Controllers\Auth\LoginController::class, 'loginPost'])->name('login.post');
    Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('custom.logout');


Route::controller(RegisterController::class)->group(function (){
    Route::get('/AddUser', [App\Http\Controllers\Auth\RegisterController::class, 'AddUser'])->name('register');
    Route::post('/saveUser','registrationPost')->name('registration.post');
    Route::get('/verify/{token}', [App\Http\Controllers\Auth\RegisterController::class, 'verify'])->name('verification.verify');

});

/*-------- customer data form --------*/
Route::get('/customer_details',[ShowController::class,'show']);

/*-------- product data form --------*/
Route::get('/manage_product',[ShowController::class,'item']);
Route::get('/delivered_product',[ShowController::class,'cell']);



Route::prefix('booking-pedi')->group(function () {
    Route::get('/', [BookingPediController::class, 'bookingPedi']);
});


/*-------- manage appoinment form --------*/
Route::get('/manage_appoinment',[ShowController::class,'showAppointment']);



use App\Http\Controllers\EventCalendarController;
use App\Models\EventCalendar;

Route::get('/geteventcalendar',[EventCalendarController::class,'geteventcalendar']);
Route::get('/createeventcalendar',[EventCalendarController::class,'createeventcalendar']);
Route::get('/deleteeventcalendar',[EventCalendarController::class,'deleteeventcalendar']);