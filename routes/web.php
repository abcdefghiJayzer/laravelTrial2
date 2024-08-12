<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\emailController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\profilelController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [dashboardController::class, 'index'])->name('dashboard');

Route::post('/idea', [IdeaController::class, 'store'] )->name('idea.create');

Route::get('/terms', function(){
    return view('terms');
});