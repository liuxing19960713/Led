<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin',"Admin\AdminController");
Route::get('/admin',"Admin\AdminCompanyController");
Route::get('/', function () {
    return view('wel');
});
Route::get('/', function () {
    return view('welssss');
});


//后台首页点难哦
Route::get('/admisd',"Admin\AdminController@inf");

echo Eks;