<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - {{ $title ?? '' }}</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="flex flex-col w-screen h-screen bg-[url('../../public/images/backgrounds/library.png')] bg-center bg-cover bg-no-repeat">

    <main class="flex flex-col h-full w-full items-center justify-center backdrop-blur-xs">
        <section class="items-center w-full max-w-xl mx-auto">
            <img src="{{ asset('images/midnight/midnight-horizontal.png') }}" class="h-36 sm:h-48 lg:h-64 w-auto"
                alt="Midnight Knowledge">
            {{ $slot }}
        </section>
    </main>

    @stack('scripts')
</body>

</html>
