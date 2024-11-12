<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\Backend\Artist\DashboardController as ArtishDashboardController;
use App\Http\Controllers\Web\Backend\Listener\DashboardController as ListenerDashboardController;
use App\Http\Controllers\Web\Website\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return 'najim';
});



// website routes
Route::get('/', [HomeController::class, 'index'])->name('home');




