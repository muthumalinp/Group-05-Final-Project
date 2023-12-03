<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HairstrController;
use App\Http\Controllers\CustomerController;
use App\Models\BookedAppointment;

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
Route::get('Product',[HairstrController::class,'product']);
Route::get('Create1',[HairstrController::class,'create1']);
Route::post('Create1',[HairstrController::class,'store']);

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

Route::get('/Gallery', function () {
    return view('/project/public/gallery');
});

Route::get('/Gallery/Hair', function () {
    return view('/project/public/galleryhair');
});

Route::get('/Product', function () {
    return view('/project/public/product');
});

//addind products
Route::get('/Create1', function () {
    return view('/project/public/create1');
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


Route::get('/bookingFaci', function () {
    return view('/project/public/includ/bookingFaci');
});
Route::get('/bookingHair', function () {
    return view('/project/public/includ/bookingHair');
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


Route::get('/Dashboard-Customer', function () {
    return view('/project/customer/dashboard');
})->name('customer.dashboard');


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

Route::get('/rentbridalwr', function () {
    return view('/project/public/rentbridalwr');
});

Route::get('/rentbridalwrgl', function () {
    return view('/project/public/rentbridalwrgl');
});

    Route::get('/Booking-Customer', function () {
    return view('/project/customer/booking');
})->name('customer.booking');


Route::get('/edit-profile', 'ProfileController@edit')->name('edit-profile');

/*--------- End of Customer Routes ----------*/

/*-------- Starter of Admin Routes ---------*/

Route::get('/Dashboard-Admin',[CustomerController::class,'showTotalCustomers'])->name('admin.dashboard');

/*-------- End of Admin Routes ----------*/

/*-------- Starter of Booking form database table ---------*/
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
/*--------- End of Booking form database table ----------*/







/*--------- End of Customer Routes ----------*/


/*--------- End of Customer Routes ----------*/


Auth::routes();


/*-------- Starter of Owner Routes ---------*/

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

    /*-----employee button route-----*/
    Route::resource('employee', EmployeeController::class)->names([
        'index' => 'project.owner.Employee.index',
    ]); 

    use App\Http\Controllers\ServiceController;
    

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
    
    Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employee.index');
    Route::post('/employees', [EmployeeController::class, 'store'])->name('employee.store');

    use App\Http\Controllers\OwnerController;

    Route::get('/owners/create', [OwnerController::class, 'create'])->name('project.owners.profile.create');
    Route::post('/project/owner/profile/store', [OwnerController::class, 'store'])->name('project.owner.profile.store');

    


    /*--------Salary management system route----------*/
    /*---use App\Http\Controllers\SalaryManagementController;--------*/

    Route::get('/attendence', function () {
        return view('/project/owner/attendence');
    });

    /*---------Route::get('/salary-management', [SalaryManagementController::class, 'index'])->name('project.owner.salary-management.index');---*/


    /*--------Owner Profile route----------*/
    /*--use App\Http\Controllers\ProfileController;

    Route::get('/profile', [App\Http\Controllers\Auth\ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [App\Http\Controllers\Auth\ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [App\Http\Controllers\Auth\ProfileController::class, 'update'])->name('profile.update');--*/

/*-------- End of Owner Routes ----------*/

/*-------- Starter of Employee Routes ---------*/

Route::get('/Dashboard-Employee', function () {
    return view('/project/employee/dashboard');
})->name('employee.dashboard');

/*-------- End of Employee Routes ----------*/

Auth::routes();

    Route::get('/LogIn', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('Login');
    Route::post('/LogIn', [App\Http\Controllers\Auth\LoginController::class, 'loginPost'])->name('login.post');
    Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::controller(RegisterController::class)->group(function (){
    Route::get('/AddUser', [App\Http\Controllers\Auth\RegisterController::class, 'AddUser'])->name('register');
    Route::post('/saveUser','registrationPost')->name('registration.post');
    Route::get('/verify/{token}', [App\Http\Controllers\Auth\RegisterController::class, 'verify'])->name('verification.verify');
    
});

/*-------- customer data form --------*/
Route::get('/customer_details',[ShowController::class,'show']);

/*-------- manage appoinment form --------*/
Route::get('/manage_appoinment',[ShowController::class,'showAppointment']);