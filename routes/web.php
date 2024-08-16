<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\UserController;
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

Route::get('/', [FrontendController::class, 'index'])->middleware('userRoleAutoLogout')->name('index');

Route::view('/about-us', 'pages.frontend.about-us')->name('about-us');

Route::get('/portfolio', [FrontendController::class, 'portfolios'])->name('portfolio');

Route::get('/product/{slug}', [FrontendController::class, 'details'])->name('product-details');

Route::get('/products', [FrontendController::class, 'products'])->name('products');

Route::get('/category/{slug}/products', [FrontendController::class, 'showByCategory'])->name('show-by-category');

// Route yang hanya boleh di akses jika sudah login
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->name('dashboard.')->prefix('dashboard')->group(function () {

    // Route yang hanya boleh di akses jika role usernya adalah ADMIN
    Route::middleware(['admin'])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
        Route::resource('product', ProductController::class)->only([
            'index', 'create', 'store', 'update', 'destroy'
        ]);
        Route::get('/product/{slug}/edit', [ProductController::class, 'edit'])->name('product.edit');

        Route::resource('product.gallery', ProductGalleryController::class)->shallow()->only([
            'store', 'destroy'
        ]);
        Route::get('/product/{slug}/gallery', [ProductGalleryController::class, 'index'])->name('product.gallery.index');
        Route::get('/product/{slug}/gallery/create', [ProductGalleryController::class, 'create'])->name('product.gallery.create');

        Route::resource('user', UserController::class)->only([
            'index', 'edit', 'update', 'destroy'
        ]);
        Route::resource('category', CategoryController::class)->only([
            'index', 'create', 'store', 'edit', 'update', 'destroy'
        ]);
        Route::get('/category/{slug}/products', [CategoryController::class, 'showByCategory'])->name('category.show-by-category');

        Route::get('/info', [DashboardController::class, 'editInfo'])->name('info.edit');
        Route::put('/info', [DashboardController::class, 'updateInfo'])->name('info.update');

        Route::resource('portfolio', PortfolioController::class)->only([
            'index', 'create', 'store', 'edit', 'update', 'destroy'
        ]);
    });
});
