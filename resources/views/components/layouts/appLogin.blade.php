<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col w-screen h-screen antialiased bg-center bg-no-repeat bg-cover"
    style="background-image: url('images/layouts/blue_night.jpg')"">

    <main class="w-full flex h-full justify-center items-center">

        {{ $slot }}
    </main>

</body>

</html>
