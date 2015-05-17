<?php

/*
|--------------------------------------------------------------------------
| Contact package routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('contact/manage', 'Anysite\Contact\Controllers\AdminController');
Route::get('contact/install', 'Anysite\Contact\Controllers\AdminController@install');