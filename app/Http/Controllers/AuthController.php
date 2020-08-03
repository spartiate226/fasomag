<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    /**
     * AuthController constructor.
     */
    public function __construct()
    {
        $this->middleware('guard')->except('form');
    }

    function login(){}

    function form(){
        return view('auth.connection');
    }

}
