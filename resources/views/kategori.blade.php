@extends('main.index')
@section('body')


<div class='h-full m-10 flex p-10 items-start  mb-10'>
    <div class="justify-start">
        <h2 class='text-2xl font-semibold text-center'>Tambah Kategori</h2>
        <form action="{{ route('kategori.store')}}" method='post'>
            @csrf
    
            <div class="mt-5"> 
                <input class='p-2 w-full bg-gray-200 rounded-sm outline-none focus:outline-none placeholder:font-semibold placeholder:text-black' placeholder="Nama Kategori" type='text' name='nama_kategori' id='nama_kategori'>
            </div>
            
            <div class="mt-5">
                <label class="font-semibold" for='deskripsi'>Deskripsi</label>
                <div>
                    <textarea placeholder='Deskripi kategori' class="bg-gray-200 focus:outline-none p-2" name='deskripsi' id='deskripsi' cols='30' rows='10'></textarea>
                </div>
            </div>
    
            <div>
                <input class="w-full p-2 font-semibold text-center bg-emerald-500 text-white rounded-md hover:opacity-80 cursor-pointer" type='submit' value='Tambah Kategori'>
            </div>
    
        </form>
    </div>
    <div class='ml-10'>
        <h1 class='text-2xl font-semibold' >Daftar Kategori</h1>
        <table class="shadow-md border-collapse  border mb-10 mt-5 p-0"  collspacing='0'>
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
</div>
@endsection