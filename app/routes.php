<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//跨站请求伪造(Cross Site Request Forgery)
Route::get("/",'HomeController@indexAction');
Route::get("/admin",'AdminController@indexAction');
Route::post("/admin/validate",'AdminController@validateAction');
Route::get("/admin/index/{md5}",'AdminController@adminPageAction');












