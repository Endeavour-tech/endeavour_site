<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
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

Route::get('/formation', function () {
    return view('pages/formation_maintenance');
});

Route::get('/services', function () {
    return view('pages/services');
});


Route::get('/abouts', function () {
    return view('pages/about');
});

Route::get('/devis', function () {
    return view('pages/devis');
});
Route::prefix('admin')->group (function (){
    Route::get('login', [AuthController::class, 'login_index'])->name('login');
    Route::post('login', [AuthController::class, 'authenticate'])->name('authentification');
    Route::get('dashboard',[DashboardController::class , 'index'])->name('dashboard');
    Route::post('logout',[DashboardController::class , 'logout'])->name('logout');
});
Route::resource('contacts','ContactController');
