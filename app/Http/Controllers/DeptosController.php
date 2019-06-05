<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeptosController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
    public function verificacion(){
    	return view('depto.verificado');
    }
}
