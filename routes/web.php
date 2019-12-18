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
Route::get('/toiture',function (){
   return view('service.toiture');
});
Route::get('/charpente',function (){
    return view('service.charpente');
});
Route::get('/comble',function (){
    return view('service.comble');
});
Route::get('/isolation',function (){
    return view('service.isolation');
});
