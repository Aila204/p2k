<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {return view('welcome');});
Route::get('/login', function () {return view('login');})->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.action');
Route::get('/home', function () {return view('home');})->name('home');
Route::get('/welcome', function () {return view('welcome');})->name('welcome');
Route::get('/dasbord', function () {return view('dasbord');})->name('dasbord');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout.action');
Route::get('/logout', function () {return view('logout');})->name('logout');

