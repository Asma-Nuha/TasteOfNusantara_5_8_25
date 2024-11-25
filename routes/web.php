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

Route::get('/login', function () {
    return view('login'); // ini merujuk ke halaman welcome.blade.php
});

// Route::get('/dbselengkapnya', function () {
//     return view('dbselengkapnya'); // ini merujuk ke halaman welcome.blade.php
// });

Route::get('/gado', function () {
    return view('gado'); // ini merujuk ke halaman welcome.blade.php
});

Route::get('/dbselengkapnya', [MakananController::class,'index'])->name('dbselengkapnya');

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [HomeController::class, 'login']);
Route::get('/about', [HomeController::class, 'welcome']);
// Route::get('/dbselengkapnya', [HomeController::class, 'dbselengkapnya'])->name('dbselengkapnya');
Route::get('/gado', function () {return view('gado');})->name('gado');
Route::get('/ayambetutu', function () {return view('ayambetutu');})->name('ayambetutu');
Route::get('/bakso', function () {return view('bakso');})->name('bakso');
Route::get('/nasiliwet', function () {return view('nasiliwet');})->name('nasiliwet');
Route::get('/rawon', function () {return view('rawon');})->name('rawon');
Route::get('/sate', function () {return view('sate');})->name('sate');
Route::get('/sotobanjar', function () {return view('sotobanjar');})->name('sotobanjar');
Route::get('/ayambetutu', function () {return view('ayambetutu');})->name('ayambetutu');
Route::get('/rendang', function () {return view('rendang');})->name('rendang');
