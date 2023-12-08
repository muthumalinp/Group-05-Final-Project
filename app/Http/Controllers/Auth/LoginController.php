<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function login()
    {
        return view('project.public.login');
    }

    public function loginPost(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Store user information in the session
            Session::put('user_data', [
                'id' => $user->id,
                'fname' => $user->fname,
                'email' => $user->email,
                'role' => $user->role,
                // Add any other fields you want to store
            ]);

            // Redirect based on the user's role
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

    public function logout(Request $request)
    {
        // Clear user information from the session
        Session::forget('user_data');

        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/Home');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
