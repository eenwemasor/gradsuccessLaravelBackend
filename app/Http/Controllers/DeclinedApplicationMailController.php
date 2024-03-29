<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Mail\ApplicationDeclined;
use \App\Mail\ApplicationAssigned;


use \App\User;

class DeclinedApplicationMailController extends Controller
{
  

   function index(Request $request) {
	$expert_id = $request->expert_id;

	$expert = User::where('id', $expert_id)->get();
	
	\Mail::to($expert[0]->email)->send(new ApplicationDeclined($expert));
	\Mail::to('qhodeweb@gmail.com')->send(new ApplicationAssigned($expert));

    return "success";
}
}

