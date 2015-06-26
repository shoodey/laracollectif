<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('welcome');
});

// Authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Admin Panel
Route::group(['prefix' => 'admin'], function(){

    // Dashboard
    Route::get('/', [
        'as' => 'dashboard',
        'middleware' => 'auth',
        function(){ return view('admin.dashboard'); }
    ]);

    // Users
    Route::get('users', [
        'as' => 'admin.users.index',
        'uses' => 'UsersController@index'
    ]);
    Route::get('users/{id}/edit', [
        'as' => 'admin.users.edit',
        'uses' => 'UsersController@edit'
    ])->where('id', '[0-9]+');
    Route::put('users/{id}', [
        'as' => 'admin.users.update',
        'uses' => 'UsersController@update'
    ])->where('id', '[0-9]+');

    //Roles
    Route::resource('roles', 'RolesController');

    //Permissions
    Route::resource('permissions', 'PermissionsController');

    // Pôles
    Route::resource('poles', 'PolesController');

    // Catégories
    Route::resource('categories', 'CategoriesController');

    // Uploads
    Route::resource('uploads', 'UploadsController');
});

//Entrust::routeNeedsRole('admin', 'admin', Redirect::to('/')->with('success', 'lol'));
