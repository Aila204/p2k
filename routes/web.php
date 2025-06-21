<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LaporanController;

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.action');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout.action');
Route::get('/logout', function () {
    return view('logout');
})->name('logout');
Route::get('/logout', function () {
    return view('logout');
})->name('logout');

Route::get('/dasbord', function () {
    return view('dasbord');
})->name('dasbord');

Route::get('/dasbordAdmin', function () {
    return view('dasbordAdmin');
})->name('dasbordAdmin');
Route::get('/dasbordAdmin', [LaporanController::class, 'index']);

Route::post('/lapor', [LaporanController::class, 'store'])->middleware('auth');
Route::resource('laporan', LaporanController::class)->middleware('auth');

// Route::middleware('role')->group(function () {
// });
=======
Route::get('/', function () {return view('welcome');});
Route::get('/login', function () {return view('login');})->name('login');
Route::post('/login', function () {return view('login');})->name('login');
Route::get('/home', function () {return view('home');})->name('home');
Route::post('/home', function () {return view('home');})->name('home');
Route::get('/welcome', function () {return view('welcome');})->name('welcome');
Route::post('/welcome', function () {return view('welcome');})->name('welcome');
Route::get('/dasbord', function () {return view('dasbord');})->name('dasbord');
Route::post('/dasbord', function () {return view('dasbord');})->name('dasbord');
Route::get('/profil', function () {return view('profil');})->name('profil');
Route::post('/profil', function () {return view('profil');})->name('profil');
>>>>>>> f12ab65 (add file)
