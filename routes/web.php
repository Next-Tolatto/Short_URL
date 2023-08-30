<?php

use App\Http\Controllers\URLController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortUrlController;
use App\Models\ShortUrlLog;

Route::get('/', function () {
    $short_url_logs_all = ShortUrlLog::all();
    return view('welcome',compact('short_url_logs_all'));
});

Route::post('/shorten', [ShortUrlController::class, 'create'])->name('short_url.create');
Route::get('/{code}', [ShortUrlController::class, 'redirect'])->name('short_url.redirect');
Route::get('qr',[URLController::class, 'qrGen']);
Route::get('/short_url/history', 'ShortUrlController@history')->name('short_url.history');
