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
    return view('index');
});

Route::get('/bloodzone-beta-program', function(){
    return view('beta');
});

Route::post('/beta-registration', 'RequestsController@store');
Route::post('/demo-request', 'DemoRequestsController@store');