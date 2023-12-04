<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Mail\RegisterMail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    //
    public function AddCustomer() {
        return view('register');
    }

    public function login() {
        return view('project\public\login');
    }

    public function loginPost(Request $request) {
        
        
        $customer = Customer::where('customer_email','=',$request->email)->first();
        if($customer && Hash::check($request->password, $customer->customer_pwd)){
            return redirect()->intended(route('customer_home'));
        } else {
            return redirect(route('login'))->with("error", "Login details are not valid");
        }

        
     }

    public function registrationPost(Request $request) {
    
        $request->validate([
        'fname' => ['required', 'string', 'max:255'],
        'lname' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'pnumber' => ['required', 'string', 'max:10'],
        'password' => ['required', 'min:8', 'confirmed'], // 'confirmed' rule checks if password matches 'password_confirmation'
    ]);
    

        $data['customer_fname'] = $request->fname;
        $data['customer_lname'] = $request->lname;
        $data['customer_email'] = $request->email;
        $data['customer_pnumber'] = $request->pnumber;
        $data['customer_pwd'] = Hash::make($request->password);
        $data['remember_token'] = Str::random(40);

       // $customer = new Customer();
        //$customer->customer_fname = $request->fname;
        //$customer->customer_lname = $request->lname;
       // $customer->customer_email = $request->email;
        //$customer->remember_token = Str::random(40);
       // $customer->customer_pnumber = $request->pnumber;
        //$customer->customer_pwd = Hash::make($request->password);
        //$customer->save();

        $customer = Customer::create($data);
        //dd($customer);

        Mail::to($data['customer_email'])->send(new RegisterMail($customer));
    if(!$customer) {
        return redirect(route('register'))->with("error", "Registration failed, try again.");
    }
        return redirect(route('login'))->with("success", "Registration success and verify your email address");
    
}

    public function verify($token)
    {
        // dd('The verify method is called with token: ' . $token);
        $customer = Customer::where('remember_token', '=', $token)->first();

        if(!empty($customer))
        {
            $customer->email_verified_at = now();
            $customer->remember_token = Str::random(40);
            $customer->save();

            return redirect(route('login'))->with("success", "Your Account Successfully Verified.");
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

    public function showTotalCustomers()
    {

        $totalCustomers = User::where('role', 'customer')->count();
        //dd($totalCustomers);
        return view('/project/admin/admin_home', compact('totalCustomers'));
    }  
    

}
