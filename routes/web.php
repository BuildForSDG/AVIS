<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//help
Route::get('help', 'RequestController@help')->name('help');
Route::post('sendhelp', 'RequestController@insert_help');


//vehicle
Route::get('vehicle', 'VehicleController@vehicle')->name('vehicle');
Route::post('insert_vehicle', 'VehicleController@save_vehicle');
Route::get('vehicle_update/{id}', 'VehicleController@update')->name('vehicle_update');
Route::post('edit_update/{id}', 'VehicleController@edit');
Route::get('vehicle_read/{id}', 'VehicleController@read');
Route::get('vehicle_delete/{id}', 'VehicleController@delete');

//surveillance
Route::get('surveillance', 'SurveillanceController@surveillance')->name('surveillance');
Route::get('surveillance_read', 'SurveillanceController@read')->name('surveillance_read');
Route::post('insert', 'SurveillanceController@save');
Route::get('surveillance_update/{id}', 'SurveillanceController@update')->name('vehicle_update');
Route::post('edit_update/{id}', 'SurveillanceController@edit');
Route::get('surveillance_read/{id}', 'SurveillanceController@read');
Route::get('surveillance_delete/{id}', 'SurveillanceController@delete');

//Admin
Route::get('vehicle_admin', 'AdminController@vehicle')->name('vehicle_admin');
Route::get('surveillance_admin', 'AdminController@surveillance')->name('surveillance_admin');
Route::get('request', 'AdminController@request')->name('request');
Route::get('imagecapture', 'AdminController@capture')->name('imagecapture');

//users & profile
Route::post('sendhelp', 'RequestController@insert_help');
Route::get('profile', 'RequestController@profile')->name('profile');
Route::post('ownerprofile', 'RequestController@ownerprofile');
