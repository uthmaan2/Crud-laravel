<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/delete-product/{id}', [ProductController::class, 'delete_product']);
Route::get('/update-product/{id}', [ProductController::class, 'update_product']);
Route::post('/update/traitement', [ProductController::class, 'update_product_traitement']);
Route::get('/product', [ProductController::class, 'list_product']);
Route::get('/add', [ProductController::class, 'add_product']);
Route::post('/add/traitement', [ProductController::class, 'add_product_traitement']);
Route::get('/', [ProductController::class, 'list_product']);
