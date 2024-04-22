<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;


Route::get('/',[MainController::class, 'index'])->name('home');
Route::get('/jobpost',[MainController::class, 'jobpost'])->name('jobpost');

Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'login'])->name('login');

Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/register',[AuthController::class, 'register'])->name('register');



Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard',[MainController::class, 'dashboard'])->name('dashboard');

    Route::get('/personal',[MainController::class, 'personal'])->name('personal');
    Route::post('/personal',[MainController::class, 'personal'])->name('personal');
    Route::get('/deletepersonal/{id}',[MainController::class, 'deletepersonal'])->name('deletepersonal');
    Route::put('updatepersonal/{id}',[MainController::class,'updatepersonal'])->name('updatepersonal');

    Route::get('/academic',[MainController::class, 'academic'])->name('academic');
    Route::post('/academic',[MainController::class, 'academic'])->name('academic');
    Route::get('deleteacademic/{id}',[MainController::class,'deleteacademic'])->name('deleteacademic');  
    Route::put('updateacademic/{id}',[MainController::class,'updateacademic'])->name('updateacademic');

    Route::get('/professional',[MainController::class, 'professional'])->name('professional');

    Route::get('/language',[MainController::class, 'language'])->name('language');
    Route::post('/language',[MainController::class, 'language'])->name('language');
    Route::get('/deletelanguage/{id}',[MainController::class, 'deletelanguage'])->name('deletelanguage');
    Route::put('updatelanguage/{id}',[MainController::class,'updatelanguage'])->name('updatelanguage');

    Route::get('/working',[MainController::class, 'working'])->name('working');
    Route::post('/working',[MainController::class, 'working'])->name('working');
    Route::get('/deleteworking/{id}',[MainController::class, 'deleteworking'])->name('deleteworking');
    Route::put('updateworking/{id}',[MainController::class,'updateworking'])->name('updateworking');

    Route::get('/training',[MainController::class, 'training'])->name('training');
    Route::post('/training',[MainController::class, 'training'])->name('training');
    Route::get('/deletetraining/{id}',[MainController::class, 'deletetraining'])->name('deletetraining');   
    Route::put('updatetraining/{id}',[MainController::class,'updatetraining'])->name('updateraining');

    Route::get('/computer',[MainController::class, 'computer'])->name('computer');
    Route::post('/computer',[MainController::class, 'computer'])->name('computer');
    Route::get('/deletecomputer/{id}',[MainController::class, 'deletecomputer'])->name('deletecomputer');
    Route::put('updatecomputer/{id}',[MainController::class,'updatecomputer'])->name('updatecomputer');

    Route::get('/referees',[MainController::class, 'referees'])->name('referees');
    Route::post('/referees',[MainController::class, 'referees'])->name('referees');
    Route::get('/deletereferees/{id}',[MainController::class, 'deletereferees'])->name('deletereferees');
    Route::put('updatereferee/{id}',[MainController::class,'updatereferee'])->name('updatereferee');

    Route::get('/other',[MainController::class, 'other'])->name('other');
    Route::post('/other',[MainController::class, 'other'])->name('other');
    Route::get('/deleteother/{id}',[MainController::class, 'deleteother'])->name('deleteother');
    Route::put('updateother/{id}',[MainController::class,'updateother'])->name('updateother');

    Route::get('/declaration',[MainController::class, 'declaration'])->name('declaration');
    Route::get('/cv',[MainController::class, 'cv'])->name('cv');

    Route::get('/changepassword',[AuthController::class, 'changepassword'])->name('changepassword');
    Route::post('/changepassword',[AuthController::class, 'changepassword'])->name('changepassword');
    Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
});


// Route::get('/admin',[MainController::Class, 'admin'])->name('admin');
Route::get('/admin',[adminController::Class, 'admin'])->name('admin');
Route::get('/user',[adminController::Class, 'user'])->name('user');
// Route::get('/userdetails/{id}',[adminController::Class, 'userdetails'])->name('userdetails');

Route::get('/job',[adminController::Class, 'job'])->name('job');
Route::post('/job',[adminController::Class, 'job'])->name('job');