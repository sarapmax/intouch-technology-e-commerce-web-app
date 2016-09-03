<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Admin;

class AdminController extends Controller
{
    public function index() {
    	$admins = Admin::all();

    	return view('backoffice.admin.index', compact('admins'));
    }

    public function activate_admin($id) {
    	$admin = Admin::find($id);

    	$admin->activated = 1;
    	$admin->save();

    	return redirect()->route('backoffice.admin.index')
                         ->with('alert-success', "<strong>".$admin->email."</strong> was activated !");
    }
}
