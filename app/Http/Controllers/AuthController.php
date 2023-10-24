<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Mail\RegisterMail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    //
    public function AddUser() {
        return view('register');
    }

    public function login() {
        return view('project\public\login');
    }

    public function loginPost(Request $request) {
        
        
        $User = User::where('email','=',$request->email)->first();
        
        // dd($User->role);
        if ($User && Hash::check($request->password, $User->password)) 
        {
            
            if ($User->role === 'customer') {
                return redirect()->route('home.customer');
            } else if ($User->role === 'admin') {
                return redirect()->route('home.admin');
            } else if ($User->role === 'owner') {
                return redirect()->route('home.owner');
            } else if ($User->role === 'employee') {
                return redirect()->route('employee');
            } else {
                return redirect()->route('home'); 
            }
        }
         else {
            return redirect(route('login'))->with("error", "Login details are not valid");
        }

        
     }

    public function registrationPost(Request $request) {
    
        $request->validate([
        'fname' => ['required', 'string', 'max:255'],
        'lname' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'phone_number' => ['required', 'string', 'max:10'],
        'password' => ['required', 'min:8', 'confirmed'],
        'role' => 'required|in:admin,customer,employee,owner',
        // 'confirmed' rule checks if password matches 'password_confirmation'
    ]);

        $data['fname'] = $request->fname;
        $data['lname'] = $request->lname;
        $data['email'] = $request->email;
        $data['phone_number'] = $request->phone_number;
        $data['password'] = Hash::make($request->password);
        $data['remember_token'] = Str::random(40);
        $data['role'] = $request->role;
        $User = User::create($data);

        Mail::to($data['email'])->send(new RegisterMail($User));

    if(!$User) {
        return redirect(route('register'))->with("error", "Registration failed, try again.");
    }
        return redirect(route('Login'))->with("success", "Registration success and verify your email address");
    
}

    public function verify($token)
    {
        // dd('The verify method is called with token: ' . $token);
        $User = User::where('remember_token', '=', $token)->first();

        if(!empty($User))
        {
            $User->email_verified_at = now();
            $User->remember_token = Str::random(40);
            $User->save();

            return redirect(route('Login'))->with("success", "Your Account Successfully Verified.");
        }
        else
        {
            abort(404);
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}