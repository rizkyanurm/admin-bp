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

// api base
Route::group(['prefix' => 'api','middleware'=>'simpleauth'], function()
{
    Route::resource('employe','EmployeController');
    Route::resource('departement','DepartementController');
});

// html base
Route::get('/', function () {
    return view('layouts/template');
});
Route::get('version', function () {
    return view('version');
});