<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TgscontactController;
use App\Http\Controllers\TgscustomerController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\tgshistoryController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::delete('/deletes/{id}', [ProductController::class, 'destroy'])->name('api.delete');
// Route::post('/post', [ProductController::class, 'store'])->name('api.post');
// Route::get('/get', [ProductController::class, 'index'])->name('api.get');
// Route::put('/edit/{id}', [ProductController::class, 'update'])->name('api.edit');
// Route::get('/findID/{id}', [ProductController::class,'findbyID'])->name('api.find.id');