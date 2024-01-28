<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\backendThemeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/backendTheme/logout', [backendThemeController::class, 'destroy'])->name('backendTheme.logout');
});

Route::get('/home', function () {
    return view('frontendTheme.index');
});

Route::get('product/details/{id}', [IndexController::class, 'productDetails']);

Route::get('/dashboard', function () {
    return view('backendTheme.home');
})->middleware(['auth', 'verified'])->name('dashboard');

// Products route
Route::middleware('auth')->group(function () {
    Route::resource('products', ProductController::class);
    Route::get('product/inactive/{id}', [ProductController::class, 'productInactive'])->name('product.inactive');
    Route::get('product/active/{id}', [ProductController::class, 'productActive'])->name('product.active');
});

Route::resource('sliders', SliderController::class);

// Admin route
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';