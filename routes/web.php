<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Unit\utd\BloodStockController;

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::name('utd.')->prefix('utd')->group(function () {
    Route::get('/', [LandingController::class, 'indexutd'])->name('index');
    Route::get('/bloodstock', [BloodStockController::class, 'bloodStockPage'])->name('stocks');
});

Route::get('/test', [LandingController::class, 'test']);

Route::get('/sample', function () {
    return view('sample');
});
