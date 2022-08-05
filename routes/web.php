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

// public endpoints
Route::get('/', function () {
    return view('welcome');
});

Route::middleware([EnsureTokenIsValid::class])->group(function () {

    Route::get('/public', function () {  //public route
        //
    })->withoutMiddleware([EnsureTokenIsValid::class]);

    Route::get('/private1', function () {
        //
    });

    Route::get('/private2', function () {
        //
    });
});