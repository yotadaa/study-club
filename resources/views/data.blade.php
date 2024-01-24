<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Semua Kategori</title>
</head>
<body class=''>
    <div class='h-screen flex flex-col justify-center items-center'>
        @foreach($value as $data)
            @if( $loop->first or $loop->iteration  <= 3 )
            <tr>
                <td class="w-10 bg-emerald-300 h-10">
                    {{$data->id}}
                </td>
                <td>{{$data->nama_kategori}}</td>
            </tr>
            <br>
            @endif
        @endforeach
    </div>
</body>
</html>