<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UrlController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class,'home'])->name('home');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/login', [PageController::class,'logIn'])->name('login');
Route::post('/login', [PageController::class,'logInpost'])->name('login.post');
Route::get('/register', [PageController::class,'register'])->name('register');
Route::post('/register', [PageController::class,'registerPost'])->name('register.post');
Route::get('/logout', [PageController::class,'logout'])->name('logout');

Route::get('/listurl', [UrlController::class,'listUrl'])->name('list');
Route::get('/createurl', [UrlController::class,'createUrl'])->name('createurl');
Route::post('/create', [UrlController::class,'store'])->name('storeurl');
Route::get('/edit/{url}/', [UrlController::class,'edit'])->name('editurl');
Route::put('/edit/{url}/', [UrlController::class,'update'])->name('updateurl');
Route::delete('/delete/{url}', [UrlController::class,'destroy'])->name('deleteurl');

Route::get('{shorturl}',[UrlController::class,'shortenurl'])->name('shorturl');
