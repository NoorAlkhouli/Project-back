<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['prefix' => 'hq'], function(){
    includeRouteFiles(__DIR__.'/api/hq/');
});



Route::get('/get/products', [ProductController::class, 'GetProducts']);

Route::get('/get/categories', [CategoryController::class, 'GetCategories']);

Route::get('/get/product/category/1', [ProductController::class, 'GetCategory1']);

Route::get('/get/product/category/2', [ProductController::class, 'GetCategory2']);

Route::get('/get/product/category/3', [ProductController::class, 'GetCategory3']);

Route::get('/get/product/category/4', [ProductController::class, 'GetCategory4']);

Route::get('/get/product/category/5', [ProductController::class, 'GetCategory5']);

Route::get('/get/product/category/6', [ProductController::class, 'GetCategory6']);


Route::get('/product/{id}', [ProductController::class, 'showProductAPI']);
