<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>


</head>

<body class="flex flex-col items-center justify-center h-screen">
    <div class="text-3xl">
        &times; Welcome to Laravel &times;
    </div>
    <div class="text-xl">
        The value from URL: {{ $title }}
    </div>
</body>

</html>
