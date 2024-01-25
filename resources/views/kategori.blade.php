@extends('main.index')
@section('body')
<div class='h-full m-10 flex flex-col p-10 items-center  mb-10'>
    <h1 class='text-2xl font-semibold' >Daftar Kategori</h1>
    <table class="shadow-md border-collapse  border mb-10 mt-10 p-0"  collspacing='0'>
        <tr class='h-10 p-3 '>
            <th class="p-2 ">ID</th>
            <th class='w-32' >Nama kategori</th>
            <th class=''>Keterangan</th>
        </tr>

        @foreach ($kategori as $data)
            <tr class="mt-0 bg-blue-500 rounded-full hover:cursor-pointer text-white w-10 h-10 hover:opacity-80">
                <td id='' class="p-2 text-center bg-emerald-500">
                    {{ $data->id }}
                </td>
                <td class='p-2'>{{ $data->nama_kategori }}</td>
                <td class='p-2'>{{ $data->deskripsi }}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection