<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class loginController extends Controller
{
    public function login(Request $re)
    {
    	$username=$re->username;
    	$password=md5($re->password);
    	$result=DB::table('khachhang')->where('khTaikhoan',$username)->where('khMatkhau',$password)->first();
    	if($result)
    	{
    		session::put("username",$username);
    		return Redirect::to('/');
    	}
    	else
    	{
	    	session::put("loginmessage","Wrong username or password!");
    		return view('userlogin');
    	}
    }
}
