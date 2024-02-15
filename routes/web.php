<?php

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


Route::view('/', 'welcome')->name('welcome');

Auth::routes([
'register' => false, 
'reset' => false,
'verify' => false,
]);

Route::get('/admin', [App\Http\Controllers\AdminController::class,'index'])->name('admin');
Route::post('/admin', [App\Http\Controllers\AdminController::class,'index'])->name('admin.perpage.post');
Route::get('/admin-add', [App\Http\Controllers\AdminAddController::class,'index'])->name('admin.add');
Route::post('/admin-add', [App\Http\Controllers\AdminAddController::class,'store'])->name('admin.add.data');

// Route::get('/admin-edit/{id}', [App\Http\Controllers\AdminEditController::class,'edit'])->name('admin.edit');
// Route::put('/admin-update/{id}', [App\Http\Controllers\AdminEditController::class,'update']);
