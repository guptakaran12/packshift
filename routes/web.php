<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\SocialLoginController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\Dashboard\Quotation\QuotationController;
use App\Http\Controllers\Dashboard\DashboardController;


Route::middleware(['guest','prevent-back-history'])->group(function(){
    Route::get('/', [AuthController::class, 'showLoginPage'])->name('login');
    Route::get('/register', [AuthController::class, 'showRegistrationPage'])->name('register.page');

    Route::post('/register/save', [AuthController::class, 'registrationFormSave'])->name('register.submit');
    Route::post('/login/save', [AuthController::class, 'loginFormSave'])->name('login.submit');

    Route::get('/request/page', [AuthController::class, 'showPasswordRequestPage'])->name('password.request');
    Route::post('/verify/email', [AuthController::class, 'verifyResetEmail'])->name('password.verify.email');

    Route::get('/password/reset', [AuthController::class, 'showPasswordChangePage'])->name('password.change');
    Route::post('/password/update', [AuthController::class, 'resetPasswordSave'])->name('password.update');

    Route::get('/auth/google', [SocialLoginController::class, 'redirectToGoogle'])->name('auth.google');
    Route::get('/auth/google/callback', [SocialLoginController::class, 'handleGoogleCallback']);
});

Route::middleware(['auth','prevent-back-history'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['auth','prevent-back-history'])->group(function () {
    Route::get('/quotations', [QuotationController::class, 'index'])->name('quotations.index');
    Route::get('/quotations/create', [QuotationController::class, 'quotationCreatePage'])->name('quotations.create');
    Route::post('/quotations/save', [QuotationController::class, 'saveQuotation'])->name('save.quotation');
    Route::delete('/quotations/delete/', [QuotationController::class, 'deleteQuotation'])->name('delete.quotation');
    Route::post('/location/data/', [LocationController::class, 'get'])->name('location.get');
});

