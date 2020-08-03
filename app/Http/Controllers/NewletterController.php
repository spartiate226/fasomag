<?php

namespace App\Http\Controllers;

use App\Events\OnsubscribeNewletter;
use App\Http\Requests\NewletterRequest;
use App\Newletter;

class NewletterController extends Controller
{
     function register(NewletterRequest $request){
         dd($request->all());
         /*Newletter::create(['email'=>$request->email]);
         event(new OnsubscribeNewletter($request->email));
         return view('front.newlettersuccess');*/
     }
}
