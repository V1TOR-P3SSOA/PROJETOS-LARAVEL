<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GlasswareController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/glasswares', [GlasswareController::class, 'index'])->name('glasswares.index');

Route::get('/glasswares/create', [GlasswareController::class, 'create'])->name('glasswares.create');

Route::post('/glasswares', [GlasswareController::class, 'store'])->name('glasswares.store');

Route::get('/glasswares/{glassware}', [GlasswareController::class, 'show'])->name('glasswares.show');

Route::get('/glasswares/{glassware}/edit', [GlasswareController::class, 'edit'])->name('glasswares.edit');

Route::get('/glasswares/{glassware}', [GlasswareController::class, 'update'])->name('glasswares.update');

Route::get('/glasswares/{glassware}', [GlasswareController::class, 'destroy'])->name('glasswares.destroy');