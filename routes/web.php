<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\Backend\Artist\ArtistDiscoverController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\Artist\DashboardController as ArtishDashboardController;
use App\Http\Controllers\Web\Backend\Artist\MerchStoreController;
use App\Http\Controllers\Web\Backend\Artist\ProfileSettingController;
use App\Http\Controllers\Web\Backend\Artist\SubscriptionPlansController;
use App\Http\Controllers\Web\Backend\Listener\DashboardController as ListenerDashboardController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('guest')->group(function () {

    Route::get('/forgot-password-show', [ForgotPasswordController::class, 'show_forgot_password_form'])->name('forgot_password.form_show');
    Route::post('/forgot-password-send-otp', [ForgotPasswordController::class, 'send_otp'])->name('forgot_password.send_otp');

    Route::get('/verify-otp', [ForgotPasswordController::class, 'show_verify_otp_form'])->name('verify-otp.form');
    Route::post('/verify-otp', [ForgotPasswordController::class, 'verify_otp'])->name('verify-otp.verify');

    Route::get('/reset-password-form', [ForgotPasswordController::class, 'show_reset_password_form'])->name('reset_password.form');
    Route::post('/update-reset-password', [ForgotPasswordController::class, 'reset_password'])->name('reset_password.reset');




    // google login routes
    Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
    Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');
});








Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// artist routes
Route::middleware('auth')->group(function () {

    /// Artist Routes with Prefix
    Route::prefix('artist-dashboard')->group(function () {

        // Dashboard
        Route::get('/', [ArtishDashboardController::class, 'index'])->name('artist.dashboard');

        // Discover
        Route::get('discover', [ArtistDiscoverController::class, 'index'])->name('artist.discover');




        // merchant routes
        Route::get('merch-store', [MerchStoreController::class, 'index'])->name('artist.merch_store.index');





        // subscriptions plans routes
        Route::get('subscription-plans', [SubscriptionPlansController::class, 'index'])->name('artist.subscription_plans.index');
        Route::get('subscription-plan-checkout', [SubscriptionPlansController::class, 'checkout'])->name('artist.subscription_plans.checkout');






        // Profile Settings
        Route::get('profile-settings', [ProfileSettingController::class, 'index'])->name('artist.profile_setting');
        Route::post('profile-settings-store', [ProfileSettingController::class, 'store'])->name('artist.profile_setting.store');
        Route::post('upload-profile-image', [ProfileSettingController::class, 'upload_image'])->name('artist.profile.upload_image');
        Route::post('remove-profile-image', [ProfileSettingController::class, 'remove_image'])->name('artist.profile.remove_image');
    });
});




Route::middleware('auth')->group(function () {

    // listener routes
    Route::get('/listener/dashboard', [ListenerDashboardController::class, 'index'])->name('listener.dashboard');
});

require __DIR__ . '/auth.php';
