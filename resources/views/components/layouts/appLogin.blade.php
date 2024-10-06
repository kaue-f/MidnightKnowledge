<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '' }}</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col w-screen h-screen antialiased bg-gradient-to-b from-[#280a4e] via-[#200039] to-[#040218]">

    <main class="w-full flex h-full justify-center items-center">
        {{ $slot }}
    </main>

</body>

</html>
