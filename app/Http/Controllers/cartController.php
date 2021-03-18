<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;
use Cart;
session_start();

class cartController extends Controller
{
    public function add($id)
    {
    	// if(Cart::get($id) == null )
    	// {
    	// 	Cart::add('spMa'=>$id,'soluong'=>1);
    	// 	return Redirect::to('shop');
    	// }
    	// else
    	// {

    	// }
    }	
}
