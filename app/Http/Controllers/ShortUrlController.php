<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\ShortUrl;
use Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

Route::post('/short_url/create', 'ShortUrlController@create')->name('short_url.create');
Route::get('/short_url/redirect/{code}', 'ShortUrlController@redirect')->name('short_url.redirect');

class ShortUrlController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'original_url' => 'required|url',
        ]);

        $shortCode = Str::random(6); // สร้างรหัสสั้นๆ
        ShortUrl::create([
            'original_url' => $request->input('original_url'),
            'short_url' => $shortCode,
        ]);

        // สร้าง QR Code โดยใช้ค่า short URL
        $qrCode = QrCode::size(245)->generate(route('short_url.redirect', $shortCode));

        // บันทึกค่า short URL และ QR Code ใน session
        session(['success' => 'Short URL created successfully', 'short_url' => route('short_url.redirect', $shortCode), 'qr_code' => $qrCode]);

        return back()->with('success', 'Short URL created successfully');
    }

    public function redirect($code)
    {
        $shortUrl = ShortUrl::where('short_url', $code)->firstOrFail();
        return redirect($shortUrl->original_url);
    }
}
