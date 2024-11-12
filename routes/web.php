<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\Backend\Artist\ArtistDiscoverController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\Artist\DashboardController as ArtishDashboardController;
use App\Http\Controllers\Web\Backend\Listener\DashboardController as ListenerDashboardController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {

    // dashboard routes
    Route::get('/artist/dashboard', [ArtishDashboardController::class, 'index'])->name('artist.dashboard');


    // discover routes
    Route::get('/artist/discover', [ArtistDiscoverController::class, 'index'])->name('artist.discover');

});




Route::middleware('auth')->group(function () {

    // listener routes
    Route::get('/listener/dashboard', [ListenerDashboardController::class, 'index'])->name('listener.dashboard');


});

require __DIR__.'/auth.php';
