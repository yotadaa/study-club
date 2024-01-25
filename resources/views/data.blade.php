@extends('main.index')
@section('body')
    @include('modal')
    @include('konfirmasi')
    <div class='h-screen flex flex-col p-10 items-center w-full'>
        <h1 class='text-3xl font-semibold mb-0'>
            Daftar Mahasiswa
        </h1>
        <form id='formulir' method='GET'>
            <table class="mb-0 mt-10">
                <tr class="rounded-md">
                    <td>
                        <input id='nim' placeholder='NIM' type='text'
                            class='border-none bg-gray-100 rounded-md focus:outline-none bg-none outline-none p-2' required>
                    </td>
                    <td>
                        <input id='nama' placeholder='Nama Mahasiswa' type='text'
                            class='border-none bg-gray-100 rounded-md focus:outline-none bg-none outline-none p-2' required>
                    </td>
                    <td>
                        <input id='desk' placeholder='Deskripsi' type='text'
                            class='border-none bg-gray-100 rounded-md focus:outline-none bg-none outline-none p-2' required>
                    </td>
                    <td>
                        <input id='kelas' placeholder='Kelas' type='text'
                            class='border-none w-20 bg-gray-100 rounded-sm focus:outline-none bg-none outline-none'
                            required>
                    </td>
                    <td>
                        <button class="p-2 flex items-center justify-center bg-emerald-500 shadow-md rounded-md px-4 p-2 rounded-md"
                            onclick='submitForm()'>
                            Tambah
                        </button>
                    </td>
                </tr>
            </table>
        </form>
        <table class="mt-10 p-0">
            @foreach ($mhs as $data)
                @if ($loop->iteration % 2 != 0)
                    <tr class="mt-0 bg-blue-500 rounded-full hover:cursor-pointer text-white w-10 h-10 hover:opacity-80">
                        <td>&times;</td>
                        <td id='' class="p-2 bg-emerald-500">
                            {{ $data->nim }}
                        </td>
                        <td class='p-2'>{{ $data->nama }}</td>
                        <td class='p-2 bg-red-700 w-72 text-wrap'>{{ $data->des }}</td>
                        <td class='p-2 bg-blue-500 '>{{ $data->kelas }}</td>
                        <td class='bg-white'>&nbsp;</td>
                        <td class='p-2 bg-yellow-300 w-20 text-center text-black hover:opacity-100 hover:bg-yellow-500'>
                            Ubah</td>
                        <td class='p-2 bg-red-500 w-20 text-center  hover:opacity-100 hover:bg-red-700'
                            onclick='hapus("{{ $data->id }}")'>Hapus
                        </td>
                    </tr>
                @else
                    <tr class="mt-0 bg-blue-600 rounded-full hover:cursor-pointer text-white w-10 h-10 hover:opacity-80">
                        <td>&times;</td>
                        <td class="p-2 bg-emerald-600">
                            {{ $data->nim }}
                        </td>
                        <td class='p-2'>{{ $data->nama }}</td>
                        <td class='p-2 bg-red-800 w-72 text-wrap'>{{ $data->des }}</td>
                        <td class='p-2 bg-blue-600 '>{{ $data->kelas }}</td>
                        <td class='bg-white'>&nbsp;</td>
                        <td class='p-2 bg-yellow-400 w-20 text-center text-black hover:opacity-100 hover:bg-yellow-500'>
                            Ubah</td>
                        <td class='p-2 bg-red-600 w-20 text-center hover:opacity-100 hover:bg-red-700'
                            onclick='hapus("{{ $data->id }}")'>Hapus</td>
                    </tr>
                @endif
            @endforeach
        </table>
    </div>
    <script>
        var mhs = @json($mhs);

        function isNimInMahasiswaArray(nim) {
            return mhs.some(function(mhs) {
                return mhs.nim === nim;
            });
        }

        function hapus(id) {
            openConfirmationModal('Konfirmasi Menghapus');
            window.location.href = `/mahasiswa/hapus/${id}`
        }

        const alertPopUp = document.querySelector('#myModal');
        alertPopUp.style.display = 'none';

        function submitForm(mhs) {
            event.preventDefault();
            const nim = document.querySelector('#nim');
            const nama = document.querySelector('#nama');
            const desk = document.querySelector('#desk');
            const kelas = document.querySelector('#kelas');

            const passed = (kelas.value.length > 0 && nim.value.length > 0) && (nama.value.length > 0) && (desk.value
                .length > 0);
            if (passed) {
                if (isNimInMahasiswaArray(nim.value.toUpperCase())) {
                    console.log(true)
                    openModal('NIM Mahasiswa sudah terdaftar');
                    return;
                }
                window.location.href = `/mahasiswa/tambah/${nim.value}_${nama.value}_${desk.value}_${kelas.value}`;
            } else {
                openModal('Isi semua field sebelum menekan submit');
            }
        }
    </script>
@endsection
