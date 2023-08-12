<?php

use App\Http\Controllers\Backend\BannerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\LogoController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/logo',[LogoController::class,'index'])->name('logo.index');
    Route::post('/logo/update/{id}',[LogoController::class,'update'])->name('logo.update');

    Route::get('/banner',[BannerController::class,'index'])->name('banner.index');
    Route::post('/banner/update/{id}',[BannerController::class,'update'])->name('banner.update');
});
