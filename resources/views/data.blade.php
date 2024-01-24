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
    <div class='h-screen flex flex-col p-10 items-center w-full'>
        <h1 class='text-3xl font-semibold mb-0'>
            Daftar Mahasiswa
        </h1>
        <table class="mt-0">
            @foreach($mhs as $data)
                @if( $loop->first or $loop->iteration  >= 2 )
                    <tr class="mt-0 bg-blue-500 rounded-full hover:cursor-pointer text-white w-10 h-10 mb-10 hover:opacity-80">
                        <td class="p-2 bg-emerald-500">
                            {{$data->nim}}
                        </td>
                        <td class='p-2' >{{$data->nama}}</td>
                        <td class='p-2 bg-red-700 '>{{$data->des}}</td>
                    </tr>
                    <br>
                @endif
            @endforeach
        </table>
    </div>
</body>
</html>