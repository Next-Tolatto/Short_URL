<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\ShortUrl;
use App\Models\ShortUrlLog;


class LogShortUrlClick
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
    
        if ($response->status() == 302 && $request->routeIs('short_url.redirect')) {
            // รับค่า short_url จาก URL
            $shortCode = $request->route('code');
    
            // ค้นหา Short URL จากฐานข้อมูล
            $shortUrl = ShortUrl::where('short_url', $shortCode)->first();
    
            if ($shortUrl) {
                // เพิ่มจำนวนคลิกและบันทึกลงฐานข้อมูล
                $shortUrl->increment('click_count');
            }
        }
    
        return $response;
    }
}
