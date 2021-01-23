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

// Home Routes

    Route::get('/', 'HomeController@homepage')->name('home.homepage');

    Route::get('/estimating', 'HomeController@estimating')->name('home.estimating');

    Route::get('/pm', 'HomeController@pm')->name('home.pm');

    Route::get('/consulting', 'HomeController@consulting')->name('home.consulting');

    Route::get('/drafting', 'HomeController@drafting')->name('home.drafting');

    Route::get('/contact', 'HomeController@contact')->name('home.contact');

// Admin Routes

    Route::get('/admin', 'AdminController@index')->name('admin.index');

    // Admin Database Routes

        Route::get('/admin/divisions', 'DivisionController@index')->name('division.index');

        Route::get('/admin/csi', 'CsiMajorController@index')->name('csi.index');

        Route::get('/admin/users', 'UserController@index')->name('user.index');

        Route::get('/admin/contacts', 'ContactsController@index')->name('contacts.index');

        Route::get('/admin/version', 'VersionController@index')->name('version.index');

// User Routes


    // User Database Routes


Route::get('/welcome', function () {
    return view('welcome');
});
