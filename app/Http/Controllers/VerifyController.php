<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class VerifyController extends Controller
{
    //
    use AuthenticatesUsers;

    /**
     * Where to redirect users after Verify.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application's Verify form.
     *
     * @return \Illuminate\Http\Response
     */
    public function verify(Request $request)
    {
    	return view('pages.verify');
        
        
    }
    /**
     * Validate the user Verify request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function validateVerify(Request $request)
    {
        $a = $this->validate($request, [
            'nip' => 'required|string',
            'tanggal_lahir' => 'required|string',
        ]);
        if($a){
        	return view('pages.register');
         }
         else{
         	return view('pages.verify');
         }
        
        
    }

}
