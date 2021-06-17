<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BookingController;
use App\Http\Controllers\admin\VehicleController;
use App\Http\Controllers\admin\DashboardController;


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/', [DashboardController::class, 'index'])->name('index');

    Route::group(['prefix' => 'bookings', 'as' => 'bookings.'], function () {

        // Bookings
        Route::get('/no-bookings', [BookingController::class, 'noBookings'])->name('noBookings');
    });

    Route::group(['prefix' => 'vehicles', 'as' => 'vehicles.'], function () {

        // No Vehicles
        Route::get('/index', [VehicleController::class, 'index'])->name('index');
        Route::get('/with-vehicles', [VehicleController::class, 'withVehicles'])->name('withVehicles');
        Route::get('/without-vehicles', [VehicleController::class, 'withoutVehicles'])->name('withoutVehicles');
    });
});
