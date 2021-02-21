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

/**
 * Public Section
 */
Route::get('/term' , 'HomeController@terms');

/**
 * Bookings
 */
Route::get('/booking' , 'BookingController@index');
Route::post('/booking', 'BookingController@create');


/**
 * Admin Sections
 */
Route::get('/admin' , 'AdminController@index');
Route::get('/admin/bookings', 'AdminController@bookings');
Route::get('/admin/staff', 'AdminController@staff');
Route::get('/admin/services' , 'AdminController@services');
