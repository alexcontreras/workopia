<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::resource('jobs', JobController::class);

// other options are
// Route::match(['methods'], 'path', function() {});
// Route::any('path', function() {});
