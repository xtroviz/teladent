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

Route::get('/home', 'HomeController@index');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('login', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('dashboard', 'AdminController@index');
    Route::get('patients', ['uses' => 'AdminController@listPatients']);
    Route::get('patients/get', ['as' => 'patients.data', 'uses' => 'AdminController@getPatients']);
    Route::get('patient/add', 'AdminController@createPatient');
    Route::post('patient/save', 'AdminController@savePatient');
    Route::get('patient/edit/{id}', 'AdminController@editPatient');
    Route::patch('patient/update/{id}', array('uses' => 'AdminController@updatePatient'));
    Route::get('patient/delete/{id}', 'AdminController@destroyPatient');
});