<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeptosController extends Controller
{
    public function verificacion(){
    	return view('depto.verificado');
    }
}
