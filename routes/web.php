<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\customer\BookingController;
use App\Http\Controllers\Customer\VehicleController;

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

// Admin Routes
require 'admin.php';

Route::get('/', [HomeController::class, 'index'])->name('name');

// Customer
Route::group(['middelware' => ['auth'], 'prefix' => 'customer', 'as' => 'customer.'], function () {

    // Bookings
    Route::group(['prefix' => 'bookings', 'as' => 'bookings.'], function () {
        Route::get('/', [BookingController::class, 'index'])->name('index');
        Route::get('create', [BookingController::class, 'create'])->name('create');
        Route::post('store', [BookingController::class, 'store'])->name('store');
    });


    // Vehicles
    Route::group(['prefix' => 'vehicles', 'as' => 'vehicles.'], function () {
        Route::get('/', [VehicleController::class, 'index'])->name('index');
        Route::get('create', [VehicleController::class, 'create'])->name('create');
        Route::post('store', [VehicleController::class, 'store'])->name('store');
    });
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
