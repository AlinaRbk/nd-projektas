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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('clients')->group(function() {

    Route::get('', 'App\Http\Controllers\ClientController@index')->name('client.index');
    
    Route::get('create', 'App\Http\Controllers\ClientController@create')->name('client.create');
    Route::get('edit', 'App\Http\Controllers\ClientController@create')->name('client.edit');
});

Route::prefix('companies')->group(function() {

    Route::get('', 'App\Http\Controllers\CompanyController@index')->name('company.index');
    
    Route::get('create', 'App\Http\Controllers\CompanyController@create')->name('company.create');
    Route::get('edit', 'App\Http\Controllers\CompanyController@create')->name('company.edit');
});