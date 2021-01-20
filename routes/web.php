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

Route::get('/', 'HomeController@homepage')->name('home.homepage');

Route::get('/estimating', 'HomeController@estimating')->name('home.estimating');

Route::get('/pm', 'HomeController@pm')->name('home.pm');

Route::get('/consulting', 'HomeController@consulting')->name('home.consulting');

Route::get('/drafting', 'HomeController@drafting')->name('home.drafting');

Route::get('/contact', 'HomeController@contact')->name('home.contact');


Route::get('/welcome', function () {
    return view('welcome');
});
