<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Auth;


//get, post, put, patch
// Route::get('/', function () {
//     return view('welcome');
// });

// Pagina Principal donde aparecen TODOS los Posts
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/posts/{category}', [App\Http\Controllers\HomeController::class, 'postByCategory'])->name('posts.category');


// Pagina de un solo Post
Route::get('/post/{postId}', [App\Http\Controllers\HomeController::class, 'post'])->name('post');


Route::get('/home', function () {
    return view('home');
})->middleware('auth');


Route::get('/admin/categories', [App\Http\Controllers\Admin\CategoriesController::class, 'index'])->name('admin.categories.index');

// CREATE
Route::post('/admin/categories/store', [App\Http\Controllers\Admin\CategoriesController::class, 'store'])->name('admin.categories.store');

// UPDATE
Route::post('/admin/categories/{categoryId}/update', [App\Http\Controllers\Admin\CategoriesController::class, 'update'])->name('admin.categories.update');

// DELETE
Route::delete('/admin/categories/{categoryId}/delete', [App\Http\Controllers\Admin\CategoriesController::class, 'delete'])->name('admin.categories.delete');



Route::get('/admin/posts', [App\Http\Controllers\Admin\PostsController::class, 'index'])->name('admin.posts.index');

// CREATE
Route::post('/admin/posts/store', [App\Http\Controllers\Admin\PostsController::class, 'store'])->name('admin.posts.store');

// UPDATE
Route::post('/admin/posts/{postId}/update', [App\Http\Controllers\Admin\PostsController::class, 'update'])->name('admin.posts.update');

// DELETE
Route::delete('/admin/posts/{postId}/delete', [App\Http\Controllers\Admin\PostsController::class, 'delete'])->name('admin.posts.delete');



// Route::get('/categorias', [App\Http\Controllers\CategoriesController::class, 'index'])->name('index'); // '@index' es un metodo que va dentro del controlador

Auth::routes();


