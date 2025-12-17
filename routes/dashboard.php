<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\EducationsController;
use App\Http\Controllers\Dashboard\ExperienesController;
use App\Http\Controllers\Dashboard\SkillsController;
use App\Http\Controllers\Dashboard\LanguagesController;
use App\Http\Controllers\Dashboard\MassagesController;
use App\Http\Controllers\Dashboard\ProjectsController;
use App\Http\Controllers\Dashboard\SettingsController;
use App\Models\Experience;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [DashboardController::class,'index'])->name('dashboard');
    Route::resource('/experience', ExperienesController::class);
    Route::resource('/educations', EducationsController::class);
    Route::resource('/skills', SkillsController::class);
    Route::resource('/languages', LanguagesController::class);
    Route::resource('/projects', ProjectsController::class);

    Route::get('/messages', [DashboardController::class,'messages'])->name('messages');
    Route::get('/messages/{message}', [DashboardController::class,'messages_show'])->name('messages.show');
    Route::get('/settings', [DashboardController::class,'settings'])->name('settings');
    Route::put('/settings', [DashboardController::class,'settings_save']);

    // Route::resource('/messages', DashboardController::class);
    // Route::resource('/settings', SettingsController::class);
});
