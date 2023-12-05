<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
//things i added 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Mail\RegisterMail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function AddUser() {
        return view('register');
    }

    public function registrationPost(Request $request) {
    
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone_number' => ['required', 'regex:/^0[0-9]{9}$/'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);
        

        $data['fname'] = $request->fname;
        $data['lname'] = $request->lname;
        $data['email'] = $request->email;
        $data['phone_number'] = $request->phone_number;
        $data['password'] = Hash::make($request->password);
        $data['remember_token'] = Str::random(40);
        $data['role'] = $request->input('role');

        $User = User::create($data);


        Mail::to($data['email'])->send(new RegisterMail($User));

    if(!$User) {
        return redirect(route('register'))->with("error", "Registration failed, try again.");
    }
        return redirect(route('LogIn'))->with("success", "Registration success and verify your email address");
    
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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
