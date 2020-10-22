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

Route::get('cookingList', 'ListController@cookingList')->name('cookingList');
Route::get('cookingCreate/{id}', 'ListController@cookingCreate')->name('cookingCreate');
Route::post('cookingAppointment', 'ListController@cookingAppointment')->name('cookingAppointment');
Route::get('laundryList', 'ListController@laundryList')->name('laundryList');
Route::get('laundryCreate/{id}', 'ListController@laundryCreate')->name('laundryCreate');
Route::post('laundryAppointment', 'ListController@laundryAppointment')->name('laundryAppointment');
Route::get('userAppointmentList', 'ListController@userAppointmentList')->name('userAppointmentList');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
