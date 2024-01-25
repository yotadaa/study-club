@extends('main.index')
@section('body')
    <div>
        <h2>Tambah Kategori</h2>
        <form action="{{ route('kategori.store')}}" method='post'>
            @csrf

            <div>
                
            </div>
            
        </form>
    </div>
@endsection