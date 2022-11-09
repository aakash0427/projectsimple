<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [PostController::class, 'show_post'])->name('dashboard'); 

    Route::get('/post/add', [PostController::class, 'index'])->name('post-add');     //calling post controller
    Route::post('/post/add', [PostController::class, 'store'])->name('post_create');
    Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post_edit');  
    Route::put('/post/update/{id}', [PostController::class, 'update'])->name('post_update');  
    Route::get('/post/destroy/{id}', [PostController::class, 'destroy'])->name('post_destroy'); 
});
