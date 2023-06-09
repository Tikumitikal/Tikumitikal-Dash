<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Controller;
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

Route::get('/table', function () {
    return view('table');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/map', function () {
    return view('map');
});

Route::controller(Controller::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/index', 'index')->name('index');
    Route::post('/logout', 'logout')->name('logout');
});


