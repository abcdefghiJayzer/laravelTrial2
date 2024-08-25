<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\emailController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\profilelController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [dashboardController::class, 'index'])->name('dashboard');

Route::get('/ideas{idea}', [IdeaController::class, 'show'] )->name('idea.show');

Route::get('/ideas{idea}/edit', [IdeaController::class, 'edit'] )->name('idea.edit');

Route::put('/ideas{idea}', [IdeaController::class, 'update'] )->name('idea.update');

Route::post('/idea', [IdeaController::class, 'store'] )->name('idea.create');

Route::delete('/idea/{id}', [IdeaController::class, 'destroy'] )->name('idea.destroy');

Route::get('/terms', function(){
    return view('terms');
});