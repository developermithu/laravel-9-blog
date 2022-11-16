<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\HomePage;
use Illuminate\Support\Facades\Route;


// Route::get('/', HomeController::class)->name('home');
Route::get('/', HomePage::class)->name('home');

// auth user routes
Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    // 'middleware' => ['auth', 'verified'],
], function () {
    Route::resource('articles', ArticleController::class);
});

Route::get('/{user}/account', [UserController::class, 'index'])->name('user.account');

Route::get('/category', [CategoryController::class, 'index'])->name('categories');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
