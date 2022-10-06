<?php

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

Route::get('/airports/edit', [Views::class, "edit_airports"]);

Route::get('/airports/removeAirline', [Views::class, "remove_airlines"]);

Route::get('/airports/delete', [Views::class, "delete_airports"]);

Route::get('/airports/newAirline', [Views::class, "add_airlines"]);




Route::get('/countries', [Views::class, "countries"]);

Route::get('/countries/new', [Views::class, "add_countries"]);

Route::get('/countries/edit/{id}', [Views::class, "edit_countries"]);

Route::get('/countries/delete/{id}', [Views::class, "delete_countries"]);

Route::post('/add_countries',[Countries::class, "create"]);

/**
 * Route {id} tai yra tas kur mes turim funkcijoje papildoma variable pavadinimu id
 */

Route::post('/country/update/{id}', [Countries::class, "update"]);

Route::post('/country/delete/{id}', [Countries::class, "delete"]);


Route::get('/airlines', [Views::class, "airlines"]);

Route::get('/airlines/new', [Views::class, "create_airlines"]);

Route::get('/airlines/edit', [Views::class, "edit_airlines"]);

Route::get('/airlines/delete', [Views::class, "delete_airlines"]);

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
