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
    Route::get('/meal-edit/{id}', [MealController::class, 'edit'])->name('meal.edit');
    Route::post('/meal-update/{id}', [MealController::class, 'update'])->name('meal.update');
});
