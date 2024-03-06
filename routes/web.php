<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;


Route::get('/',[MainController::class, 'index'])->name('home');

Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'login'])->name('login');
Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/newuser',[AuthController::class, 'newuser'])->name('newuser');

Route::get('/dashboard',[MainController::class, 'dashboard'])->name('dashboard');

Route::post('/addpersonal',[MainController::class, 'addpersonal'])->name('addpersonal');
Route::get('/personal',[MainController::class, 'personal'])->name('personal');

Route::get('/academic',[MainController::class, 'academic'])->name('academic');
Route::post('/academic',[MainController::class, 'academic'])->name('academic');
Route::get('deleteAccademic/{id}',[MainController::class,'deleteAccademic'])->name('deleteAccademic');  

Route::get('/professional',[MainController::class, 'professional'])->name('professional');
Route::get('/language',[MainController::class, 'language'])->name('language');
Route::get('/working',[MainController::class, 'working'])->name('working');
Route::get('/training',[MainController::class, 'training'])->name('training');
Route::get('/computer',[MainController::class, 'computer'])->name('computer');
Route::get('/referees',[MainController::class, 'referees'])->name('referees');
Route::get('/other',[MainController::class, 'other'])->name('other');
Route::get('/declaration',[MainController::class, 'declaration'])->name('declaration');
Route::get('/cv',[MainController::class, 'cv'])->name('cv');

