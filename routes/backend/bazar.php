<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BazarController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/bazar-list',[BazarController::class,'index'])->name('bazar.index');
    Route::get('/bazar-create',[BazarController::class,'create'])->name('bazar.create');
    Route::post('/bazar-create',[BazarController::class,'store'])->name('bazar.store');
    Route::get('/bazar-details/{id}',[BazarController::class,'bazarDetails'])->name('bazar.details');
    Route::get('/bazar-approve/{id}',[BazarController::class,'approve'])->name('bazar.approve');
});
