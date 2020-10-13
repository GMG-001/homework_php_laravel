<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[\App\Http\Controllers\PostControler::class, 'index']);
Route::get('/create', [\App\Http\Controllers\PostControler::class, 'create'])->name('post.create');
Route::get('/{id}', [\App\Http\Controllers\PostControler::class, 'show'])->name('post.show');
Route::post('/savepost', [\App\Http\Controllers\PostControler::class, 'save'])->name('post.save');
Route::get('/{id}/edit', [\App\Http\Controllers\PostControler::class, 'edit'])->name('post.edit');
Route::put('/{id}/update', [\App\Http\Controllers\PostControler::class, 'update'])->name('post.update');
Route::delete('/{id}/delete', [\App\Http\Controllers\PostControler::class, 'delete'])->name('post.delete');
