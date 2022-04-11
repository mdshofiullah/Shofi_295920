<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class , 'index'])->name('dashboard');

    Route::get('/add-user', [UserController::class , 'index'])->name('user.add');
    Route::post('/new-user', [UserController::class , 'create'])->name('user.new');
    Route::get('/manage-user', [UserController::class , 'manage'])->name('user.manage');
    Route::get('/edit-user', [UserController::class , 'edit'])->name('user.edit');
    Route::post('/update-user', [UserController::class , 'update'])->name('user.update');
    Route::get('/delete-user', [UserController::class , 'delete'])->name('user.delete');

    Route::get('/add-product', [ProductController::class , 'index'])->name('product.add');
    Route::post('/new-product', [ProductController::class , 'create'])->name('product.new');
    Route::get('/manage-product', [ProductController::class , 'manage'])->name('product.manage');
    Route::get('/edit-product', [ProductController::class , 'edit'])->name('product.edit');
    Route::post('/update-product', [ProductController::class , 'update'])->name('product.update');
    Route::get('/delete-product', [ProductController::class , 'update'])->name('product.delete');

});
