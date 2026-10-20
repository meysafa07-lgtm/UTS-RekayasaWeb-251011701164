<?php

use App\Http\Controllers\EcoProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/eco-products');
});

Route::get('/eco-products', [EcoProductController::class, 'index'])->name('eco-products.index');
Route::get('/eco-products/{id}', [EcoProductController::class, 'show'])->name('eco-products.show');