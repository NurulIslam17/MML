<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BazarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/bazar-list',[BazarController::class,'index'])->name('bazar.index');
    Route::get('/bazar-create',[BazarController::class,'create'])->name('bazar.create');
    Route::post('/bazar-create',[BazarController::class,'store'])->name('bazar.store');
});
