<?php

use Illuminate\Support\Facades\Route;


Auth::routes(['register' => false]);

Route::group([
    'namespace'     => 'Admin',
    'middleware'    =>  'auth',
    'as'            => 'admin.',
    'prefix'        => 'admin',
], function () {

    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    Route::resource('categories', 'CategoryController');

    Route::resource('posts', 'PostController');

    Route::resource('tags', 'TagController');

});
