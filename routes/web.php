<?php

use App\Http\Controllers\MakananController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index'); // ini merujuk ke halaman welcome.blade.php
});






Route::get('/login', [HomeController::class, 'login'])-> name('login');

Route::get('/gado', function () {
    return view('gado'); // ini merujuk ke halaman welcome.blade.php
});

Route::get('/makanans', [MakananController::class, 'index']);
Route::get('/makanan/{id}', [MakananController::class, 'show'])->name('makanan.show');

Route::get('/dbselengkapnya', [MakananController::class,'index'])->name('dbselengkapnya');



Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'welcome']);

// Route::get('/dbselengkapnya', [HomeController::class, 'dbselengkapnya'])->name('dbselengkapnya');
