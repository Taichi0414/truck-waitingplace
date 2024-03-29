<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('companies', 'CompanyApiController');

Route::resource('drivers', 'DriverController');

// Route::resource('companies', 'TrucknumberApiController');

// Route::resource('companies', 'ReviewApiController');

// Route::resource('companies', 'WaitingplaceApiController');

// Route::resource('companies', 'TimeApiController');