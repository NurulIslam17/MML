<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\MealController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/meals', [MealController::class, 'index'])->name('meal.index');
    Route::get('/meal-create', [MealController::class, 'create'])->name('meal.create');
    Route::post('/meal-store', [MealController::class, 'store'])->name('meal.store');
});
