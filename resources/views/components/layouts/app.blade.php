<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{ env('APP_NAME') }} - {{ $title ?? '' }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen antialiased text-base-content bg-base-100">
    <div class="w-full bg-base-300 border-b-2 border-b-secondary sticky top-0 z-10">
        <livewire:components.layouts.navbar />
    </div>
    <main class="max-w-screen-2xl w-full mx-auto p-8 lg:px-10 lg:py-12">
        {{ $slot }}
    </main>

    <x-spotlight shortcut="shift.space" search-text="" no-results-text="Ops! Nenhum conteúdo encontrado" />
    @stack('scripts')
</body>

</html>
