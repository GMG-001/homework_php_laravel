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

Route::get('post_login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'getLogin'])->name('Login');
Route::get('/',[\App\Http\Controllers\PostControler::class, 'index'])->name('posts.show');

Route::get('/registration', [\App\Http\Controllers\LoginController::class, 'registration'])->name('user.registration');
Route::get('/registration/save', [\App\Http\Controllers\LoginController::class, 'registration_save'])->name('user.registration.save');


Route::middleware('auth')->group(function (){

    Route::get('/create', [\App\Http\Controllers\PostControler::class, 'create'])->name('post.create');
    Route::get('posts/{id}', [\App\Http\Controllers\PostControler::class, 'show'])->name('post.show');
    Route::post('/savepost', [\App\Http\Controllers\PostControler::class, 'save'])->name('post.save');
    Route::get('/{id}/edit', [\App\Http\Controllers\PostControler::class, 'edit'])->name('post.edit');
    Route::put('/{id}/update', [\App\Http\Controllers\PostControler::class, 'update'])->name('post.update');
    Route::delete('/{id}/delete', [\App\Http\Controllers\PostControler::class, 'delete'])->name('post.delete');
    Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
    Route::get('/user_info', [\App\Http\Controllers\PostControler::class, 'user_info'])->name('user_info');
    Route::post('/posts/{post}/approve', [\App\Http\Controllers\PostControler::class, 'approve'])->name('approve');
    Route::get('/mail/create', [\App\Http\Controllers\MailController::class, 'create_mail'])->name('create_mail');
    Route::post('/mail/send', [\App\Http\Controllers\MailController::class, 'send'])->name('send.mail');

});

//Route::get('/user_info', function () {
//    return view('user.my_posts');
//});
