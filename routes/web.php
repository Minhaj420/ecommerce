<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/category/add', [CategoryController::class, 'index'])->name('category.add');
Route::post('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::get('/category/manage', [CategoryController::class, 'manage'])->name('category.manage');
Route::get('/category/edit{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/category/delete{id}', [CategoryController::class, 'delete'])->name('category.delete');


Route::get('/brand/add', [BrandController::class, 'index'])->name('brand.add');
Route::post('/brand/create', [BrandController::class, 'create'])->name('brand.create');
Route::get('/brand/manage', [BrandController::class, 'manage'])->name('brand.manage');
Route::get('/brand/edit{id}', [BrandController::class, 'edit'])->name('brand.edit');
Route::post('/brand/update{id}', [BrandController::class, 'update'])->name('brand.update');
Route::get('/brand/delete{id}', [BrandController::class, 'delete'])->name('brand.delete');
