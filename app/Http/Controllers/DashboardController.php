<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    public function newpassword(){
        $passwords = $this->validate(request(), [
            'passwordold' => 'required|string',
            'passwordnew' => 'required|string',
            'passwordrep' => 'required|string|same:passwordnew'
        ]);
        $passold = Hash::make(request('passwordold'));
        $passnew = Hash::make(request('passwordnew'));
        $user = Auth::user();
         //dd($passold);
        if(Hash::check(request('passwordold'), $user->password)){
            return redirect()->route('dashboard')->with('passwords', 'Se actualizo correctamente');
        }
        //return view('auth.dashboard');

        return back()->with(['passwords' => 'Hubo un error en las contraseñas']);
    }
}
