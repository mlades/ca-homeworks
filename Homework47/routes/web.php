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


Route::get('/home', 'HomeController@index')->middleware('auth')->name('index');

Route::get('/login', 'LoginController@show')->name('login');

Route::get('/register', 'RegisterController@show')->name('register');

Route::post('/login', 'LoginController@authenticate');

Route::post('/register', 'RegisterController@register');

Route::post('/logout', 'LoginController@logout')->middleware('auth')->name('logout');

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});




