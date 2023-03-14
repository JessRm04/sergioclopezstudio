<?php

use App\Http\Controllers\ProductsController;
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


Route::get('products', [ProductsController::class, 'index']);
Route::get('products/{product}', [ProductsController::class, 'show']);
Route::post('products',[ProductsController::class, 'store']);
Route::put('products/{product}',[ProductsController::class, 'update']);
Route::delete('products/{product}', [ProductsController::class, 'delete']);