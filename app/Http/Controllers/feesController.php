<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
 use App\fees;

class feesController extends Controller {
 
public function pay(Request $request){
$user_id = $request->input('user_id');
$name = $request->input('name');
$amount = $request->input('amount');
$data=array('user_id'=>$user_id,"name"=>$name,"amount"=>$amount);
DB::table('fees')->insert($data);
echo "Record inserted successfully.<br/>";
return redirect()->back();

}

public function index(){
    //return view('ajaxget');
  }

  public function getUsers($id = 0){
    // Fetch all records
    $userData['data'] = fees::getuserData($id);

    echo json_encode($userData);
    exit;
  }

}