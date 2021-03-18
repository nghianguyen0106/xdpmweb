<?php

use Illuminate\Support\Facades\Route;

//------------load all page -----------//
//---User---//
Route::get('/','homeController@index');
Route::get('/shop', 'homeController@shop');
Route::get('/shop-cart', 'homeController@cart');
Route::get('/product-details', 'homeController@product');
Route::get('/contact', 'homeController@contact');
Route::get('/checkout', 'homeController@checkout');
Route::get('/blog', 'homeController@blog');
Route::get('/blog-details', 'homeController@blogD');


//---admin---//
//--------------Login------------//

Route::get('/login','homeController@login');
Route::get('/logout','homeController@logout');//logout
Route::get('/register','homeController@register');//logout

Route::post('/checklogin','loginController@login');
Route::post('/checkregister','registerController@register');