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

// // protected endpoints
// $router->group(['middleware' => 'auth'], function () {
//     $router->get('/protected-endpoint', 'SecretController@index');
//     // more endpoints ...
// });

// // List all posts
// Route::get('posts', 'PostController@index');

// // List a single post
// Route::get('post/{id}', 'PostController@show');

// // Create a new post
// Route::post('post', 'PostController@store');

// // Update a post
// Route::put('post', 'PostController@store');

// // Delete a post
// Route::delete('post/{id}', 'PostController@destroy');