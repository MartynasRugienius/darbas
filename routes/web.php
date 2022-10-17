<?php

use App\Http\Controllers\Airlines;
use App\Http\Controllers\Airports;
use App\Http\Controllers\Countries;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Views;


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



Route::get('/', [Views::class, "index"]);

Route::get('/airports', [Views::class, "airports"]);

Route::get('/airports/add', [Views::class, "add_airports"]);

Route::get('/airports/edit/{id}', [Views::class, "edit_airports"]);

Route::get('/airports/removeAirline/{id}', [Views::class, "remove_airlines"]);

Route::get('/airports/delete/{id}', [Views::class, "delete_airports"]);

Route::get('/airports/newAirline/{id}', [Views::class, "add_airlines"]);




Route::get('/countries', [Views::class, "countries"]);

Route::get('/countries/new', [Views::class, "add_countries"]);

Route::get('/countries/edit/{id}', [Views::class, "edit_countries"]);

Route::get('/countries/delete/{id}', [Views::class, "delete_countries"]);



/**
 * Route {id} tai yra tas kur mes turim funkcijoje papildoma variable pavadinimu id
 */

 /**
  * Post methods
  */
Route::post('/countries/update/{id}', [Countries::class, "update"]);

Route::post('/countries/delete/{id}', [Countries::class, "delete"]);

Route::post('/add_countries',[Countries::class, "create"]);




Route::get('/airlines', [Views::class, "airlines"]);

Route::get('/airlines/new', [Views::class, "create_airlines"]);

Route::get('/airlines/edit/{id}', [Views::class, "edit_airlines"]);

Route::get('/airlines/delete/{id}', [Views::class, "delete_airlines"]);

// Auth::routes();

Route::post('/airlines/add', [Airlines::class, "create"]);

Route::post('airlines/update/{id}', [Airlines::class, "update"]);

Route::post('/airlines/delete/{id}', [Airlines::class, "delete"]);



Route::post('/airports/add', [Airports::class, "create"]);

Route::post('/airports/update/{id}', [Airports::class, "update"]);

Route::post('/airports/delete/{id}', [Airports::class, "delete"]);

Route::post('/airports/airline/{id}', [Airports::class, "airline"]);

Route::post('/airports/airlineremove/{id}', [Airports::class, "airliner"]);

Route::post('/airports/search/', [Airports::class, "search"]);

Route::get('/countries/noAirlines', [Views::class, "noAirlines"]);

Route::get('/countries/noAirlinesCountries', [Views::class, "noAirlinesAirports"]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
