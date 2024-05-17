<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;


Route::get('/', Controllers\HomeController::class);

Route::get('article', [Controllers\ArticleController::class, 'index'])->name('blog');

Route::get('article/{article:slug}', [Controllers\ArticleController::class, 'show']);


Route::get('write', fn() => view('write', ['title' => 'Write']));

