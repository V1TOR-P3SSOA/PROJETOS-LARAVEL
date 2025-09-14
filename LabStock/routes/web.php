<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GlasswareController;

Route::get('/', function () {
    return view('index');
});

Route::get('/glasswares', [GlasswareController::class, 'index']);