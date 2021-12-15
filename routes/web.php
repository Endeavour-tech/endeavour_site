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
    return view('index');
});


Route::get('/services', function () {
    return view('pages/services');
});

Route::get('/contacts', function () {
    return view('pages/contact');
});

Route::get('/abouts', function () {
    return view('pages/about');
});

Route::get('/devis', function () {
    return view('pages/devis');
});