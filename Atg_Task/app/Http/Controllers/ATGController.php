<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use Illuminate\Validation\Rule;
use Input;

class ATGController extends Controller
{
    //
    public function index(Request $request){
      
 $users = DB::table('atg_task1')
        ->where('email', '=', $request->input('email'))
        ->pluck('email');
  



        $Name=$request->input('name');
    	$Email=$request->input('email');
	
    	
        $Pincode=$request->input('pincode');
    	$data= array('name'=>$Name ,'email'=>$Email,'pincode'=>$Pincode );
    	if(count($users)==0){
    		DB::table('atg_task1')->insert($data);
    	}else{
    		echo 'email already exists';
    	}
    	
    	
    	return view('atg_task' ,['users'=>$users]);


    }
}
