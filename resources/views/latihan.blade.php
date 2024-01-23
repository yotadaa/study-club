<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan</title>
</head>

<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="w-1/2 lg:w-96 flex-col flex items-center justify-center h-screen cursor-pointer bg-white shadow-xl p-5">
        <div class='hover:opacity-70 bg-blue-600 p-3 rounded-sm text-white w-full shadow-md'>
            Hello, World! {{ $value }}
        </div>
        <div class='mt-2 hover:opacity-70 bg-red-600 p-3 rounded-sm text-white w-full shadow-md'>
            @if (Str::upper($value) == Str::upper('Mukhtada'))
                I see the rightful name
            @else
                I dont recognize you
            @endif
        </div>
    </div>
</body>

</html>
