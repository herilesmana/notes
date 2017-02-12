<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $title ?? "Notes App"}}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div id="notes-app">
            <app-header></app-header>
            {{-- <search-panel></search-panel> --}}
            {{-- <app-main></app-main> --}}
            {{-- <input-modal></input-modal> --}}
            {{-- <edit-modal></edit-modal> --}}
            {{-- <view-modal></view-modal> --}}
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
