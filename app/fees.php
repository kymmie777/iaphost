<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\support\facades\DB;

class fees extends Model
{
    public function student(){
    	return $this->belongsTo('App\student');
    }
    function gep(Blueprint $table) {
    $table->foreign('user_id')
            ->references('user_id')
            ->on('students')
            ->onDelete('cascade');
        }


     public static function getuserData($id=0){

    if($id==0){
      $value=DB::table('students')->orderBy('user_id', 'asc')->get(); 
    }else{
      $value=DB::table('students')->where('user_id', $id)->first();
    }
    return $value;
  
  }

  
}
