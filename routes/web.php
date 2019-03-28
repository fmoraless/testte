<?php

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

Route::get('/', function () {
    return view('welcome');
});

//<!-- //Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
//}); -->

//Routes
Route::middleware(['auth'])->group(function(){
   //Roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
        ->middleware('permission:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
        ->middleware('permission:roles.index');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')
        ->middleware('permission:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
        ->middleware('permission:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
        ->middleware('permission:roles.show');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
        ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
        ->middleware('permission:roles.edit');

    //Procesos
    Route::post('procesos/store', 'ProcesoController@store')->name('procesos.store')
        ->middleware('permission:procesos.create');

    Route::get('procesos', 'ProcesoController@index')->name('procesos.index')
        ->middleware('permission:procesos.index');

    Route::get('procesos/create', 'ProcesoController@create')->name('procesos.create')
        ->middleware('permission:procesos.create');

    Route::put('procesos/{role}', 'ProcesoController@update')->name('procesos.update')
        ->middleware('permission:procesos.edit');

    Route::get('procesos/{role}', 'ProcesoController@show')->name('procesos.show')
        ->middleware('permission:procesos.show');

    Route::delete('procesos/{role}', 'ProcesoController@destroy')->name('procesos.destroy')
        ->middleware('permission:procesos.destroy');

    Route::get('procesos/{role}/edit', 'ProcesoController@edit')->name('procesos.edit')
        ->middleware('permission:procesos.edit');

    //Users
    Route::get('users', 'UserController@index')->name('users.index')
        ->middleware('permission:users.index');

    Route::put('users/{role}', 'UserController@update')->name('users.update')
        ->middleware('permission:users.edit');

    Route::get('users/{role}', 'UserController@show')->name('users.show')
        ->middleware('permission:users.show');

    Route::delete('users/{role}', 'UserController@destroy')->name('users.destroy')
        ->middleware('permission:users.destroy');

    Route::get('users/{role}/edit', 'UserController@edit')->name('users.edit')
        ->middleware('permission:users.edit');
});
