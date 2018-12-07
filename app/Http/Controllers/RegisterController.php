<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form(Request $request){
    	if($request->session()->get('nip') != null){
    		return view('layouts.app');
    	}
        else if($request->session()->get('temp') == null){
            return redirect()->route('verify.form');
        }
    	return view('pages.register');
    }

    public function attempt(Request $request){
    	$this->validate($request,[
    		'nama' => 'required',
    		'nip' => 'required',
    		'password' => 'required',
    		'password_confirmation' => 'required',
    	]);
    	if($request->password != $request->password_confirmation){
    		return view('pages.register');
    	}
    	$attempts = [
    		'nama' => $request->nama,
    		'nip' => $request->nip,
    		'password' => bcrypt($request->password),
    	];
        DB::table('users')->where('nip', $attempts['nip'])->update(['password', $attempts['password']]);
        $request->session()->put('nip', $attempts['nip']);
        return view('layouts.app');
    }
}
