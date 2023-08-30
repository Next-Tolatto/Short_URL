<?php

use App\Http\Controllers\URLController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortUrlController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/shorten', [ShortUrlController::class, 'create'])->name('short_url.create');
Route::get('/{code}', [ShortUrlController::class, 'redirect'])->name('short_url.redirect');
Route::get('qr',[URLController::class, 'qrGen']);
