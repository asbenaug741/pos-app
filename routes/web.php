<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::resource('product', ProductController::class);
});
