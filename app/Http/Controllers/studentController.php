<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class studentController extends Controller
{
   public function index(){
   	return view('fees');

   }
   public function create(){
      //  return view('student.create');
   }

   public function store(Request $Request){
   	$this->validate($Request,[
   		'name' => 'required',
   		'email' => 'required'
   	]);
   	$student = new student([
   		'name' => $Request->get('name'),
   		'email' => $Request->get('email')
   	]);
   	$student->save();
   	return redirect()->back();
   }

   public function show($id){

   }
   public function edit($id){

   }
   public function update(Request $Request, $id){

   }
   public function destroy($id){

   }

}
