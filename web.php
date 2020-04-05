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

Route::get('/donors', function () {
    return view('admin.donors.index');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/doctors', function () {
    return view('admin.doctors.index');
});

Route::get('/wards', function () {
    return view('admin.wards.index');
});

Route::get('/consultations', function () {
    return view('admin.consultation.index');
});

Route::get('/appointments', function () {
    return view('admin.appointments.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
