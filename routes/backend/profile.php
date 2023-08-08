<?php

use App\Http\Controllers\Backend\ProfileController;
use Illuminate\Support\Facades\Route;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::post('/profile-edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile-update', [ProfileController::class, 'update'])->name('profile.update');
});
