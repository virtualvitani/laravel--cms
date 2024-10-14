<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/articles/category/{category}', [ArticleController::class, 'byCategory'])->name('category.articles');
Route::get('/articles/user/{author}', [ArticleController::class, 'byAuthor'])->name('user.articles');
Route::get('/articles/tag/{tag:name}', [ArticleController::class, 'byTag'])->name('tag.articles');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create')->can('create', Article::class);
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store')->can('create', Article::class);
    Route::get('/articles/{article:slug}/edit', [ArticleController::class, 'edit'])->name('articles.edit')->can('update', 'article');
    Route::patch('/articles/{article:slug}', [ArticleController::class, 'update'])->name('articles.update')->can('update', 'article');
    Route::delete('/articles/{article:slug}', [ArticleController::class, 'destroy'])->name('articles.destroy')->can('delete', 'article');

    Route::post('/tags', [TagController::class, 'store'])->name('tags.store');
});

Route::get('/articles/{article:slug}', [ArticleController::class, 'show'])->name('articles.show');

require __DIR__.'/auth.php';