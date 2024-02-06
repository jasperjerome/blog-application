<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoriesController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// BLOG
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/show/{id}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/edit/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('blog.edit');
Route::put('/blog/update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blog.update');
Route::delete('/blog/delete/{id}', [App\Http\Controllers\BlogController::class, 'delete'])->name('blog.delete');

// CATEGORIES
Route::get('/category', [App\Http\Controllers\CategoriesController::class, 'index'])->name('category.index');
Route::get('/category/create', [App\Http\Controllers\CategoriesController::class, 'create'])->name('category.create');
Route::post('/category/store', [App\Http\Controllers\CategoriesController::class, 'store'])->name('category.store');
Route::get('/category/edit/{id}', [App\Http\Controllers\CategoriesController::class, 'edit'])->name('category.edit');
Route::put('/category/update/{id}', [App\Http\Controllers\CategoriesController::class, 'update'])->name('category.update');
Route::delete('/category/delete/{id}', [App\Http\Controllers\CategoriesController::class, 'delete'])->name('category.delete');

// FILTERS
Route::get('/blogs/category/{categorySlug}', [BlogController::class, 'filterByCategory']);
