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
        <form>
            <table class="mb-0 mt-10">
                <tr class="bg-gray-200">
                    <td>
                        <input
                            placeholder='NIM'
                            type='text'
                            class='border-none focus:outline-none bg-none outline-none'
                            required
                        >
                    </td>
                    <td>
                        <input
                            placeholder='Nama Mahasiswa'
                            type='text'
                            class='border-none focus:outline-none'
                            required
                        >
                    </td>
                    <td>
                        <input
                            placeholder='Deskripsi'
                            type='text'
                            class='border-none focus:outline-none'
                            required
                        >
                    </td>
                    <td>
                        <button class="p-2 flex items-center justify-center bg-emerald-500 shadow-md rounded-md px-4">Tambah</button>
                    </td>
                </tr>
            </table>
        </form>
        <table class="mt-0">
            @foreach($mhs as $data)
                @if( $loop->first or $loop->iteration  >= 2 )
                    @if ($loop->iteration % 2 != 0)
                        <tr class="mt-0 bg-blue-500 rounded-full hover:cursor-pointer text-white w-10 h-10 mb-10 hover:opacity-80">
                            <td>&times;</td>
                            <td class="p-2 bg-emerald-500">
                                {{$data->nim}}
                            </td>
                            <td class='p-2' >{{$data->nama}}</td>
                            <td class='p-2 bg-red-700 '>{{$data->des}}</td>
                        </tr>
                    @else
                        <tr class="mt-0 bg-blue-600 rounded-full hover:cursor-pointer text-white w-10 h-10 mb-10 hover:opacity-80">
                            <td>&times;</td>
                            <td class="p-2 bg-emerald-600">
                                {{$data->nim}}
                            </td>
                            <td class='p-2' >{{$data->nama}}</td>
                            <td class='p-2 bg-red-800 '>{{$data->des}}</td>
                        </tr>
                    @endif
                    <br>
                @endif
            @endforeach
        </table>
    </div>
</body>
</html>