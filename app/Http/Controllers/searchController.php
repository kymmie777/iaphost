<?php

namespace App\Http\Controllers;
use Illuminate\support\facades\Input;
use App\students; 
use DB;

use Illuminate\Http\Request;

class searchController extends Controller
{
    public function index(){
   	return view('search');
  }
  public function search(){
     $student = DB::table('student')->where('user_id', '=', 100)->get();
  }
}
