<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputoController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
    public function asignar(){
    	return view('computo.asignar');
    }
    public function listado(){
    	return view('computo.listado');
    }
    public function aprobado(){
    	return view('computo.aprobado');
    }
    public function liberacion(){
    	return view('computo.liberacion');
    }
}
