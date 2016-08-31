<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
	public function __construct() {
		$this->middleware(['admin', 'admin_activated']);
	}

    public function index() {
    	return view('backoffice.dashboard.index');
    }
}
