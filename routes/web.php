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

Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth']], function () {

    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::get('/superadmin', 'SuperAdminController@index')->name('superadmin.index');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //CONTRATO
    Route::get('/contrato/create', 'ContratoController@create')->name('contrato.create');
    Route::post('/contrato/store', 'ContratoController@store')->name('contrato.store');

    Route::get('/contrato/detalles', 'ContratoController@detalles')->name('contrato.detalles');
    Route::get('/contrato/plan', 'ContratoController@plan')->name('contrato.plan');
    Route::get('/contrato/fechas', 'ContratoController@fechas')->name('contrato.fechas');
    Route::get('/contrato/cronograma', 'ContratoController@cronograma')->name('contrato.cronograma');
    Route::get('/contrato/kpis', 'ContratoController@kpis')->name('contrato.kpis');
    Route::get('/contrato/{id}', 'ContratoController@show')->name('contrato.show');






    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('usuarios', 'UserController')->only([
        'create', 'store', 'edit','update','index','show'
    ]);
});