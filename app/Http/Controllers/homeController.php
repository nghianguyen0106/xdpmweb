<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
class homeController extends Controller
{
    public function index()
    {
    	return view('home');
    }

    public function shop()
    {
    	return view('shop');
    }

    public function cart()
    {
    	return view('shop-cart');
    }

    public function product()
    {
    	return view('product-detail');
    }

    public function contact()
    {
    	return view('contact');
    }

    public function checkout()
    {
    	return view('checkout');
    }

    public function blog()
    {
    	return view('blog');
    }

    public function blogD()
    {
    	return view('blog-detail');
    }
    public function login()
    {
        return view('userlogin');
    }
    public function logout()
    {
        Session::forget('username');  
        return view('userlogin');   
    }
    public function register()
    {
        return view('register');   
    }
    public function shopcart()
    {
        return view('shop-cart');   
    }
}
