<?php

use App\Http\Controllers\FlightsController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('/');

// flight routes
Route::get('/flights', [FlightsController::class, 'index'])->name('flights.index');
Route::get('/flights/cheapest', [FlightsController::class, 'cheapest'])->name('flights.cheapest');

Route::get('/about', [HomeController::class, 'about'])->name('about');
