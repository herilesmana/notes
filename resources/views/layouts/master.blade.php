<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? "Notes App"}}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div id="notes-app">
            <add-modal></add-modal>
            <edit-modal></edit-modal>
            <app-header></app-header>
            <search-panel></search-panel>
            <app-main></app-main>
            <app-footer></app-footer>
            {{-- <edit-modal></edit-modal> --}}
            {{-- <view-modal></view-modal> --}}
            <add-button></add-button>

        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
