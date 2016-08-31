<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Admin;

class AdminAuthController extends Controller
{
	public function __construct() {
		$this->middleware('guest');
	}

	public function getRegister() {
		if (Auth::guard('admin')->check()) {
			return redirect('backoffice/dashboard');
		}else {
			return view('backoffice.register');
		}
	}

	public function postRegister(Request $request) {

		$this->validate($request, [
    		'email' => 'required|email|max:255|unique:admins',
    		'password'  =>'required|alphaNum|Between:4,8|Confirmed',
            'password_confirmation'=>'required|alphaNum|Between:4,8',
    		'fullname' => 'required|max:255',
    		'activated' => 'required',
    	]);

    	Admin::create([
    		'email' => $request->input('email'),
    		'password' => $request->input('password'),
    		'fullname' => $request->input('fullname'),
    		'activated' => $request->input('activated')
    	]);

    	return redirect('backoffice/register')->with('success-register', 'Register successfully! wait for activated from another admin(s).');

	}

	public function getLogin() {
		if (Auth::guard('admin')->check()) {
			return redirect('backoffice/dashboard');
		}else {
			return view('backoffice.login');
		}
	}

    public function postLogin(Request $request) {
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required'
    	]);

    	$auth = auth()->guard('admin');
 
        $credentials = [
            'email' =>  $request->input('email'),
            'password' =>  $request->input('password'),
        ];

    	if ($auth->attempt($credentials, $request->input('remember'))) {
    		return redirect('backoffice/dashboard');   
        }else {
            return redirect()->back()->with('error-login', 'Invalid email or password');
        }
    }

    public function getLogout() {
    	auth()->guard('admin')->logout();

    	return redirect('backoffice/login');
    }
}
