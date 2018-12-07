<?php

namespace App\Http\Controllers;

use DB, Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function form(Request $request){
    	if($request->session()->get('nip') != null){
    		return view('master');
    	}
    	else if($request->session()->get('temp') != null){
	    	$request->session()->forget('temp');
	    	$request->session()->flush();
	    }
    	return view('pages.login');
    }

    public function attempt(Request $request){
    	$this->validate($request,[
    		'nip' => 'required',
    		'password' => 'required',
    	]);
    	$attempts = [
    		'nip' => $request->nip,
    		'password' => $request->password,
    	];

    	$data = DB::table('users')->where(
    		'nip', $attempts['nip'])->pluck('password')->first();
    	if(Hash::check($attempts['password'], $data)){
    		$request->session()->put('nip', $attempts['nip']);
    	}
    	return redirect()->route('login.form');
    }

    public function logout(Request $request){
    	if($request->session()->get('nip') != null){
	    	$request->session()->forget('nip');
	    	$request->session()->flush();
	    }
    	return redirect()->route('login.form');
    }
}
