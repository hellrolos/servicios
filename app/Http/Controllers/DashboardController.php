<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
    public function index(){
    	return view('auth.dashboard');
    }
    public function password(){
    	return view('auth.password');
    }
    public function solicitud(){
    	return view('auth.solicitud');
    }
}
