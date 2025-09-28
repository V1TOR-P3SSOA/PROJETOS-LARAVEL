<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GlasswareController;

Route::resource('glasswares', GlasswareController::class);