<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;

Route::get('/', function () {return view('welcome');});
Route::get('/login', function () {return view('login');})->name('login');
Route::post('/login', function () {return view('login');})->name('login');
Route::get('/home', function () {return view('home');})->name('home');
Route::post('/home', function () {return view('home');})->name('home');
Route::get('/welcome', function () {return view('welcome');})->name('welcome');
Route::post('/welcome', function () {return view('welcome');})->name('welcome');
Route::get('/dasbord', function () {return view('dasbord');})->name('dasbord');
Route::post('/dasbord', function () {return view('dasbord');})->name('dasbord');
Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna');
Route::post('/pengguna', [PenggunaController::class, 'index'])->name('pengguna');