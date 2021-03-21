<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;
session_start();
class adminController extends Controller
{
	// --- Go to ---//
    public function index()
    {
    	if(session::has('adminname'))
    	{
    		return view('admin.dashboard');
    	}
    	else
    	{
    			return Redirect::to('adlogin');
    	}
    }
   
    public function type()
    {
    	if(session::has('adminname'))
    	{
    		return view('admin.type');
    	}
    	else
    	{
    		session::put('loginrequire','Login first !');
    			return Redirect::to('adlogin');
    	}
    }
   public function brand()
    {
    	if(session::has('adminname'))
    	{
    		return view('admin.brand');
    	}
    	else
    	{
    		session::put('loginrequire','Login first !');
    			return Redirect::to('adlogin');
    	}
    }
    public function product()
    {
        if(session::has('adminname'))
        {
            return view('admin.product');
        }
        else
        {
            session::put('loginrequire','Login first !');
                return Redirect::to('adlogin');
        }
    }
    public function adminedit()
    {
        if(session::has('adminname'))
        {
            return view('admin.edit');
        }
        else
        {
            session::put('loginrequire','Login first !');
                return Redirect::to('adlogin');
        }
    }

     public function logout()
    {
    	session::forget('adminname');
    	return Redirect::to('adlogin');
    }
    public function ADlogin()
    {
    	return view('admin.login');
    }

    //-- end go to --//


// -- Login -- //
    public function checklogin(Request $re)
    {
    	if($re == null)return;
    	else 
    	{
    		$username=$re->username;
    		$password=$re->password;
    		$result=DB::table('khachhang')->where('khTaikhoan',$username)->where('khMatkhau',$password)->first();
    		if($result)
    		{
    			Session::put('adminname',$username);
    			return Redirect::to('/admin');
    		}
    		else
    		{
    			Session::put('error','Wrong username or password !');
    			return Redirect::to('adlogin');
    		}
    	}
    }
// --endlogin -- //
    
    public function edit(Request $re,$id,$act)
    {
        
    }
}
