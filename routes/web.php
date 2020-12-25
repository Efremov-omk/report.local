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
Auth::routes();

Route::match(['get', 'post'], '/', 'StartController@index')->name('index');

Route::match(['get', 'post'], '/index', 'CalcController@index')->name('index')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
    // маршрут для ресурсного контроллера WarehouseController
    Route::resource('reports', 'ReportController');
});

