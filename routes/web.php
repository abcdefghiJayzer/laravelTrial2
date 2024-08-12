<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\emailController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\profilelController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [dashboardController::class,'index']);

Route::get('/terms', function{

Route::get('/profile', [profileController::class,'index']);
