<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
   public function index()
{
    return view('fees');
}

public function register()
   {
   	return view('student');
   }
   
}
