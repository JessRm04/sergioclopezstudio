<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AuthController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


Route::middleware(['auth:sanctum'])->group(function (){

    Route::get('logout', [AuthController::class, 'logout']);

});




Route::get('products', [ProductsController::class, 'index']);
Route::get('products/{product}', [ProductsController::class, 'show']);
Route::post('products',[ProductsController::class, 'store']);
Route::put('products/{product}',[ProductsController::class, 'update']);
Route::delete('products/{product}', [ProductsController::class, 'delete']);

