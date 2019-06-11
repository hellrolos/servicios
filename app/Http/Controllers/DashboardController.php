<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

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
    public function newpassword(Request $request){
        $passwords1 =  Validator::make($request->all(), [
            'passwordold' => 'required|string',
            'passwordnew1' => 'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
            'passwordrep' => 'required|string|same:passwordnew1'
        ]);
        if($passwords1->fails())
        {
            return back()->with(['passwords' => 'Hubo un error en las contraseñas']);
        }
        else
        {
            $user = Auth::user();
            if(Hash::check(request('passwordold'), $user->password)){
                $user->password = Hash::make(request('passwordnew1'));
                $user->save();
                return redirect()->route('dashboard')->with('alert', 'Se actualizo correctamente');
            }
        }


    }
}
