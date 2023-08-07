<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/submit-form', 'App\Http\Controllers\FormController@submit')->name('submit.form');

Route::get('/success', function () {
    return view('success');
})->name('success');

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/login-success', function () {
    return view('loginSuccess');
})->name('loginSuccess');

Route::post('/login-success', [AuthController::class, 'login'])->name('loginSuccess.post');

Route::post('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function () {
});