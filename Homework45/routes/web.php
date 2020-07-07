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

Route::delete('cards/{card}/delete', 'CardController@destroy');

Route::get('cards/{card}/edit', 'CardController@edit');

Route::put('cards/{card}', 'CardController@update');

Route::post('cards', 'CardController@store');

Route::get('cards/create', 'CardController@create');

Route::get('cards/{card}', 'CardController@show');

Route::get('/', 'CardController@index');

Route::get('/left-sidebar', function () {
    return view('left-sidebar');
});

Route::get('/right-sidebar', function () {
    return view('right-sidebar');
});

Route::get('/no-sidebar', function () {
    return view('no-sidebar');
});
