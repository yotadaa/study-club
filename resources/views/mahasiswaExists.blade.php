@extends('main.index')
@section('body')
    <div class="w-screen h-screen bg-gray-300 flex flex-col items-center justify-center">
        <article class="px-32 py-10 bg-white rounded-md shadow-xl flex flex-col items-center justify-center">
            Mahasiswa sudah terdaftar!
            <a href='/mahasiswa'
                class="cursor-pointer px-5 py-2 mt-10 bg-blue-600 text-white shadow-md rounded-sm">Kembali</a>
        </article>
    </div>
@endsection
