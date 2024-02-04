<?php

use Illuminate\Http\Request;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserFlightsController;
use App\Http\Controllers\AdminFlightsController;

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

// default routes and about view
Route::get('/', [HomeController::class, 'index'])->name('/');
Route::view('/about', 'about')->name('about');

// flight routes (list all, list cheapest, show a single flight)
Route::get('/flights', [FlightsController::class, 'index'])->name('flights.index');
Route::get('/flights/cheapest', [FlightsController::class, 'cheapest'])->name('flights.cheapest');
Route::get('/flights/{flight}', [FlightsController::class, 'show'])->name('flights.show');



// breeze routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // user flights routes(list, book new one, unbook flight)
    Route::get('/user/flights', [UserFlightsController::class, 'index'])->name('user.flights');
    Route::post('/user/flights/{flight}', [UserFlightsController::class, 'store'])->name('user.flights.store');
    Route::delete('/user/flights/{flight}', [UserFlightsController::class, 'destroy'])->name('user.flights.destroy');

    // admin flight routes
    Route::middleware([IsAdmin::class])->group(function () {
        Route::get('/admin/flights/create', [AdminFlightsController::class, 'create'])->name('admin.flights.create');
    });
});



require __DIR__ . '/auth.php';
