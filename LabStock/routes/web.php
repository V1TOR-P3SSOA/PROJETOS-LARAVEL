<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GlasswareController;

Route::get('/', [GlasswareController::class, 'index'])->name('index');

Route::get('/glasswares', [GlasswareController::class, 'index'])->name('glasswares.index');

Route::get('/glasswares/create', [GlasswareController::class, 'create'])->name('glasswares.create');

Route::post('/glasswares', [GlasswareController::class, 'store'])->name('glasswares.store');

Route::get('/glasswares/{glasswares}', [GlasswareController::class, 'show'])->name('glasswares.show');

Route::get('/glasswares/{glasswares}/edit', [GlasswareController::class, 'edit'])->name('glasswares.edit');

Route::get('/glasswares/{glasswares}', [GlasswareController::class, 'update'])->name('glasswares.update');

Route::get('/glasswares/{glasswares}', [GlasswareController::class, 'destroy'])->name('glasswares.destroy');