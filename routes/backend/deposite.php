<?php

use App\Http\Controllers\Backend\DepositeController;
use Illuminate\Support\Facades\Route;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/deposites', [DepositeController::class, 'index'])->name('deposite.index');
    Route::get('/deposite-create', [DepositeController::class, 'create'])->name('deposite.create');
    Route::post('/deposite-create', [DepositeController::class, 'store'])->name('deposite.store');
});
