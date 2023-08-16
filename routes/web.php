<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/', [UserController::class, 'login']);

//Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Product Section


Route::middleware(['auth:web'])->group(function () {

    Route::get('/show/product', [ProductController::class, 'index'])->name('dashboard.products');



    Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');

    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('product.update');


    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');


    // Category Section
    Route::get('/show/categories', [CategoryController::class, 'index'])->name('dashboard.category');

    Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('category.store');

    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('category.update');


    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});







// Route::get('/', function () {
//     return view('products.test');
// });
