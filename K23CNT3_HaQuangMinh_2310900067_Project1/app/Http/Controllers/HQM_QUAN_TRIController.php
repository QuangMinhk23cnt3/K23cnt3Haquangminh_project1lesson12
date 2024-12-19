<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HQM_QUAN_TRIController extends Controller
{
    //get: login
    public function hqmLogin()
    {
        return view('HqmLogin.hqm-login');
    }
    //post: login 
    public function hqmLoginSubmit(Request $request)
    {
        return view('HqmLogin.hqm-login');
    }
}
