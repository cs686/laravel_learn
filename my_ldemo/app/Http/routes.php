<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //return view('welcome');
    //$user = new App\User();
    //dd($users);相当于var_dum
    return \App\Member::all();

});

Route::get('test','TestController@create');

//表单验证
Route::get('form',function(){
    return view('signup');
});