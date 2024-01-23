<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body class='bg-gray-100 flex flex-col h-screen items-center justify-center'>
    @extends('layout/app')
    @section('title', 'Halaman Latihan Layout : Home')

    @section('content')
        <p> Ini adalah halaman Home</p>
        <p>Selamat datang !</p>
    @endsection
</body>

</html>
