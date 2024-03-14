<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;


Route::get('/',[MainController::class, 'index'])->name('home');

Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'login'])->name('login');
Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/newuser',[AuthController::class, 'newuser'])->name('newuser');



Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard',[MainController::class, 'dashboard'])->name('dashboard');

    Route::get('/personal',[MainController::class, 'personal'])->name('personal');
    Route::post('/personal',[MainController::class, 'personal'])->name('personal');

    Route::get('/academic',[MainController::class, 'academic'])->name('academic');
    Route::post('/academic',[MainController::class, 'academic'])->name('academic');
    Route::get('deleteAccademic/{id}',[MainController::class,'deleteAccademic'])->name('deleteAccademic');  

    Route::get('/professional',[MainController::class, 'professional'])->name('professional');

    Route::get('/language',[MainController::class, 'language'])->name('language');
    Route::post('/language',[MainController::class, 'language'])->name('language');
    Route::get('/deletelanguage/{id}',[MainController::class, 'deletelanguage'])->name('deletelanguage');
    Route::get('/editlanguage/{id}',[MainController::class, 'editlanguage'])->name('editlanguage');

    Route::get('/working',[MainController::class, 'working'])->name('working');
    Route::post('/working',[MainController::class, 'working'])->name('working');
    Route::get('/deleteworking/{id}',[MainController::class, 'deleteworking'])->name('deleteworking');

    Route::get('/training',[MainController::class, 'training'])->name('training');
    Route::post('/training',[MainController::class, 'training'])->name('training');
    Route::get('/deletetraining/{id}',[MainController::class, 'deletetraining'])->name('deletetraining');

    Route::get('/computer',[MainController::class, 'computer'])->name('computer');
    Route::post('/computer',[MainController::class, 'computer'])->name('computer');
    Route::get('/deletecomputer/{id}',[MainController::class, 'deletecomputer'])->name('deletecomputer');

    Route::get('/referees',[MainController::class, 'referees'])->name('referees');
    Route::post('/referees',[MainController::class, 'referees'])->name('referees');
    Route::get('/deletereferees/{id}',[MainController::class, 'deletereferees'])->name('deletereferees');

    Route::get('/other',[MainController::class, 'other'])->name('other');
    Route::post('/other',[MainController::class, 'other'])->name('other');
    Route::get('/deleteother/{id}',[MainController::class, 'deleteother'])->name('deleteother');

    Route::get('/declaration',[MainController::class, 'declaration'])->name('declaration');
    Route::get('/cv',[MainController::class, 'cv'])->name('cv');

    Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
});



Route::get('/admin',[AdminController::Class, 'admin'])->name('admin');
Route::get('/user',[AdminController::Class, 'user'])->name('user');