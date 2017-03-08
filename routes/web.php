<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/waybill', 'WaybillController@show');
Route::get('/organization', 'OrganizationController@show');
Route::get('/employer', 'EmployerController@show');
Route::get('/auto', 'AutoController@show');

Route::group(['prefix' => 'api'], function() {
    Route::resource('/auto', 'AutoController', ['except' => ['create', 'edit']]);
    Route::resource('/autotype', 'AutoTypeController', ['except' => ['create', 'show', 'edit']]);
    Route::resource('/employer', 'EmployerController', ['except' => ['create', 'show', 'edit']]);
    Route::resource('/position', 'PositionController', ['except' => ['create', 'show', 'edit']]);
    Route::resource('/organization', 'OrganizationController', ['except' => ['create', 'show', 'edit']]);
    Route::resource('/organizationtype', 'OrganizationTypeController', ['except' => ['create', 'show', 'edit']]);
    Route::resource('/waybill', 'WaybillController', ['except' => ['create', 'show', 'edit']]);
});
