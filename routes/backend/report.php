<?php

use App\Http\Controllers\Backend\ReportController;
use Illuminate\Support\Facades\Route;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/reports', [ReportController::class, 'index'])->name('report.index');
    Route::get('/reports-status/{id}', [ReportController::class, 'status'])->name('report.paid_status');

});
