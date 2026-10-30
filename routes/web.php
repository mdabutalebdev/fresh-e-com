<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurOwnerController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
use App\Models\AboutSection;

Route::get('/product', [ProductListController::class, 'index'])->name('product');
Route::get('/our-owner', [OurOwnerController::class, 'index'])->name('our-owner');

Route::get('/about-us', function () {
    return view('about-us', [
        'about' => AboutSection::where('is_active', true)->first(),
    ]);
})->name('about-us');

Route::view('/contact', 'contact')->name('contact');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/admin/dashboard/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/admin/dashboard/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/create-storage-link', function () {
    $targetFolder = storage_path('app/public');
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    if (is_link($linkFolder)) {
        unlink($linkFolder);
    } elseif (is_dir($linkFolder)) {
        rmdir($linkFolder);
    }
    symlink($targetFolder, $linkFolder);
    return 'Storage link created successfully!';
});

require __DIR__.'/auth.php';
