<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{ env('APP_NAME') }} - {{ $title ?? '' }}</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="flex flex-col w-screen h-screen antialiased bg-linear-to-b/decreasing from-base-100 from-5% to-base-300 to-90%">

    <main class="w-full flex h-full justify-center items-center">
        {{ $slot }}
    </main>

    @stack('scripts')
</body>

</html>
