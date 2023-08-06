<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/submit-form', 'App\Http\Controllers\FormController@submit')->name('submit.form');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/hello', function () {
    return view('hello');
});