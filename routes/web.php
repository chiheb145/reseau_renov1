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
Route::get('reseau_renov/toiture',function (){
   return view('service.toiture');
});
Route::get('reseau_renov/charpente',function (){
    return view('service.charpente');
});
Route::get('reseau_renov/comble',function (){
    return view('service.comble');
});
Route::get('reseau_renov/isolation',function (){
    return view('service.isolation');
});
Route::get('reseau_renov/humidité',function (){
    return view('service.humidité');
});

Route::get('reseau_renov/facade',function (){
    return view('service.facade');
});
Route::get('reseau_renov/thermique',function (){
    return view('service.thermique');
});

Route::get('reseau_renov/ventilation',function (){
    return view('service.ventilation');
});
Route::get('reseau_renov/ecran',function (){
    return view('service.ecran');
});
Route::get('reseau_renov/radiateur',function (){
    return view('service.radiateur');
});

Route::post('send_mail',['as' => 'send_mail' , 'uses' => 'front\SendController@send_mail']);

