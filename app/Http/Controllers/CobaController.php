<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CobaController extends Controller
{
    public function index () {
        return view('menu.dokumen_awal',['data'=> User::all()]);
    }
}
