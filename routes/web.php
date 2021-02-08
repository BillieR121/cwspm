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

// public Routes

    Route::get('/', 'PublicController@homepage')->name('public.homepage');
    Route::get('/estimating', 'PublicController@estimating')->name('public.estimating');
    Route::get('/pm', 'PublicController@pm')->name('public.pm');
    Route::get('/consulting', 'PublicController@consulting')->name('public.consulting');
    Route::get('/drafting', 'PublicController@drafting')->name('public.drafting');
    Route::get('/contact', 'PublicController@contact')->name('public.contact');

// Admin Routes

    Route::get('/admin', 'AdminController@index')->name('admin.index');

    // Admin Database Routes

        Route::get('/admin/divisions', 'DivisionController@index')->name('division.index');
        // Admin Division Routes

            Route::get('/admin/divisions/create', 'DivisionController@create')->name('division.create');

        Route::get('/admin/csi', 'CsiMajorController@index')->name('csi.index');
        // Admin CSI Routes

            Route::get('/admin/csi/create', 'CsiMajorController@create')->name('csi.create');


        Route::get('/admin/users', 'UserController@index')->name('user.index');
        // Admin User Routes

            Route::get('/admin/users/create', 'UserController@create')->name('user.create');


        Route::get('/admin/contacts', 'ContactsController@index')->name('contacts.index');
        // Admin Contacts Routes

            Route::get('/admin/contacts/create', 'ContactsController@create')->name('contacts.create');


        Route::get('/admin/version', 'VersionController@index')->name('version.index');
        // Admin Version Routes

            Route::get('/admin/version/create', 'VersionController@create')->name('version.create');

// User Routes


    // User Database Routes


Route::get('/welcome', function () {
    return view('welcome');
});
