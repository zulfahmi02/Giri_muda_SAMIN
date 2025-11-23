<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VRController;
use App\Http\Controllers\DetailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Detail Pages (Ajaran, Sejarah, Tokoh, Kepercayaan)
Route::prefix('detail')->name('detail.')->group(function () {
    Route::get('/ajaran', [DetailController::class, 'ajaran'])->name('ajaran');
    Route::get('/sejarah', [DetailController::class, 'sejarah'])->name('sejarah');
    Route::get('/tokoh', [DetailController::class, 'tokoh'])->name('tokoh');
    Route::get('/kepercayaan', [DetailController::class, 'kepercayaan'])->name('kepercayaan');
});

// VR Routes
Route::prefix('vr')->name('vr.')->group(function () {
    Route::get('/', [VRController::class, 'index'])->name('index');
    Route::get('/{scene}', [VRController::class, 'view'])->name('view');
});