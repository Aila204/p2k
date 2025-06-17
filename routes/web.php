<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});
Route::post('/login', function () {return view('login');})->name('login');
