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
})->name('welcome');
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
Route::get('/humidité',function (){
    return view('service.humidité');
});

Route::get('/facade',function (){
    return view('service.facade');
});
Route::get('/thermique',function (){
    return view('service.thermique');
});

Route::get('/ventilation',function (){
    return view('service.ventilation');
});
Route::get('/ecran',function (){
    return view('service.ecran');
});
Route::get('/radiateur',function (){
    return view('service.radiateur');
});

Route::post('send_mail',['as' => 'send_mail' , 'uses' => 'front\SendController@send_mail']);

