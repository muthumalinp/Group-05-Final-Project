<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Mail\RegisterMail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function login() {
        return view('project\public\login');
    }

    public function loginPost(Request $request) {


        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Redirect based on the user's role
            $request->session()->put('user_id', $user->id);
            switch ($user->role) {
                case 'customer':  
                    return redirect()->route('customer.dashboard');
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'owner':
                    return redirect()->route('owner.dashboard');
                case 'employee':
                    return redirect()->route('employee.dashboard');
                default:
                    return redirect()->route('home');
            }
        } else {
            return redirect()->route('login')->with('error', 'Login details are not valid');
        }


     }

    public function logout (Request $request) {
        $request->session()->flush();
        return redirect()->route('login.post');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
