<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/leagues/{id}', [DashboardController::class, 'leagues'])->name('leagues');
Route::get('/teams/{id}', [DashboardController::class, 'teams'])->name('teams');