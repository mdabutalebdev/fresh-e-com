<?php

use App\Http\Controllers\Admin\AboutSectionController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductShowcaseController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('banners', BannerController::class)->except(['show']);
    Route::resource('product-showcases', ProductShowcaseController::class)->except(['show']);
    Route::get('/about-section', [AboutSectionController::class, 'edit'])->name('about-section.edit');
    Route::put('/about-section', [AboutSectionController::class, 'update'])->name('about-section.update');
    Route::resource('social-links', \App\Http\Controllers\Admin\SocialLinkController::class)->except(['show']);
});
