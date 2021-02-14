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
Route::get('/', 'UserController@show');
Route::get('/contact', 'UserController@showContact');
Route::get('/about-ldg', 'UserController@showAbout');
Route::get('/ldg-certifications', 'UserController@showLdgcert');
Route::get('/portal', 'UserController@showportal');
Route::get('/verify-diamonds', 'UserController@showverifyDiamonds');
// Route::get('/', function () {
//     return view('layouts.app');
    
// });
