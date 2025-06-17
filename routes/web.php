<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});
Route::get('/login', function () {return view('login');})->name('login');
Route::post('/login', function () {return view('login');})->name('login');
Route::get('/home', function () {return view('home');})->name('home');
Route::get('/welcome', function () {return view('welcome');})->name('welcome');
Route::get('/dasbord', function () {return view('dasbord');})->name('dasbord');