<!DOCTYPE html>
<html>
<head>
    <title>Short URL Generator</title>
</head>
<body>
    <h1>Short URL Generator</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
        <p>Short URL: <a href="{{ session('short_url') }}">{{ session('short_url') }}</a></p>
        <div>{!! session('qr_code') !!}</div>
        
    @endif

    <form method="post" action="{{ route('short_url.create') }}">
        @csrf
        <input type="text" name="original_url" placeholder="Enter URL">
        <button type="submit">Shorten</button>
    </form>

    @foreach ($short_url_logs_all as $log)
        <div>
            <p>Original URL: <a href="{{ $log->original_url }}">{{ $log->original_url }}</a></p>
            <p>Short URL: <a href="{{ route('short_url.redirect', $log->short_url) }}">{{ route('short_url.redirect', $log->short_url) }}</a></p>
            <p>Created At: {{ $log->created_at }}</p><br>
        </div>
    @endforeach

</body>
</html>
