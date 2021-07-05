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

Route::get('/tickets', 'App\Http\Controllers\TicketController@index')->name('tickets.index');

Route::get('/tickets/create', 'App\Http\Controllers\TicketController@create')->name('tickets.create');

Route::post('/tickets/create', 'App\Http\Controllers\TicketController@store')->name('tickets.store');

Route::post('/tickets/{ticket}', 'App\Http\Controllers\TicketController@update')->name('tickets.update');



Route::get('/tickets/delete/{ticket}', 'App\Http\Controllers\TicketController@delete')->name('tickets.delete');

Route::post('/tickets/delete/{ticket}', 'App\Http\Controllers\TicketController@destroy')->name('tickets.destroy');


Route::get('/tickets/{ticket}', 'App\Http\Controllers\TicketController@show')->name('tickets.show');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
