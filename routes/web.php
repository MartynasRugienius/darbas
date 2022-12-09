<?php

use App\Http\Controllers\Skateboards;
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

Route::get('/skateboards', [Views::class, "skateboards"]);

Route::get('/skateboards/add', [Views::class, "add_skateboards"]);

Route::get('/skateboards/edit/{id}', [Views::class, "edit_skateboards"]);

Route::get('/skateboards/delete/{id}', [Views::class, "delete_skateboards"]);

Route::get('/login', [Views::class, "login"]);

Route::post('/skateboards/add', [Skateboards::class, "create"]);

Route::post('/skateboards/update/{id}', [Skateboards::class, "update"]);

Route::post('/skateboards/delete/{id}', [Skateboards::class, "delete"]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
