<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortUrl;
use Str;

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

        return back()
            ->with('success', 'Short URL created successfully')
            ->with('short_url', route('short_url.redirect', $shortCode));
    }

    public function redirect($code)
    {
        $shortUrl = ShortUrl::where('short_url', $code)->firstOrFail();
        return redirect($shortUrl->original_url);
    }
}