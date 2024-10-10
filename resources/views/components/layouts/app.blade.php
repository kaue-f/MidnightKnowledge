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

<body class="h-screen font-sans antialiased text-base-content bg-base-100" x-data>
    <div class="w-full bg-base-300 border-b-2 border-b-secondary sticky top-0 z-10">
        @livewire('components.navbar')
    </div>
    <main class="max-w-screen-2xl w-full mx-auto p-6 lg:px-10 lg:py-6">
        {{ $slot }}
    </main>
    <x-spotlight shortcut="shift.space" search-text="" no-results-text="Ops! Nenhum conteúdo encontrado" />
</body>

</html>
