<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Admin;

class AdminAuthController extends Controller
{
	public function getRegister() {
		return view('backoffice.register');
	}

	public function postRegister(Request $request) {

		$this->validate($request, [
    		'email' => 'required|email|max:255',
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

    	return redirect('backoffice/register')->with('info', 'register successfully!');

	}

	public function getLogin() {
		return view('backoffice.login');
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

    	if ($auth->attempt($credentials)) {
             echo "OK";                  
        } else {
            echo 'Error';
        }
    }
}
