<?php

namespace App\Http\Controllers;

use Auth, DB;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function form(){
    	return view('pages.verify');
    }

    public function attempt(Request $request){
    	$this->validate($request,[
    		'nip' => 'required',
    		'tanggal_lahir' => 'required',
    	]);
    	$attempts = [
    		'nip' => $request->nip,
    		'tanggal_lahir' => $request->tanggal_lahir,
    	];

    	$data = DB::table('users')->where([
    		['nip', '=', $attempts['nip']], 
    		['tanggal_lahir', '=', $attempts['tanggal_lahir']],
            ['password', '<>', 'NULL'],
    		])->first();
    	if($data != null){
            $request->session()->put('temp', $attempts['nip']);
    		return view('pages.register', ['data' => $data]);
    	}
    	return redirect()->route('verify.form');
    }
}
