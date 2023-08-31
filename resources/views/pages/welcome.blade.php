@extends('layouts.main_template')
<!DOCTYPE html>
<html>
<head>
    <title>Short URL Generator</title>
</head>
<body>
    <h1>Short URL Generator</h1>
    
    <form method="post" action="{{ route('short_url.create') }}">
        @csrf
        <input type="text" name="original_url" placeholder="Enter URL">
        <button type="submit">Shorten</button>
    </form>

    @if(session('success'))
        <p>{{ session('success') }}</p>
        <p>Short URL: <a href="{{ session('short_url') }}">{{ session('short_url') }}</a></p>
        <div>{!! session('qr_code') !!}</div>        
    @endif

    <h2>Short URL Statistics</h2>
    @foreach ($statistics as $shortUrl)
    <p>
        No: {{ $shortUrl->id }}<br>
        Original URL: <a href="{{ $shortUrl->original_url }}">{{ $shortUrl->original_url }}</a><br>
        Short URL: <a href="{{ route('short_url.redirect', $shortUrl->short_url) }}">{{ route('short_url.redirect', $shortUrl->short_url) }}</a><br>
        Click Count: {{ $shortUrl->click_count }}
    </p>
    @endforeach
</body>
</html>
