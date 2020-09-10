<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet"></link>
    <link href="{{ mix('/css/nprogress.css') }}" rel="stylesheet"></link>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="{{ mix('/js/app.js') }}" defer></script>
</head>
    <body>
        @inertia
    </body>
</html>
