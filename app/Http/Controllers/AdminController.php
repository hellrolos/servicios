<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function user(){
   	return view('admin.newuser');
   }
   public function updateuser(){
   	return view('admin.updateuser');
   }
   public function users(){
   	return view('admin.users');
   }
}
