@extends('component.layout')

@section('styles')
    <style>
        .table tr:nth-child(even) {
            background-color: #f2f2f2;
            /* Set the background color for odd rows */
        }

        .table tr:nth-child(odd) {
            background-color: #ffffff;
            /* Set the background color for even rows */
        }

        #ubah-form input[type='text']:focus,
        textarea {
            outline: none;

        }

        #ubah-form input[type='text'],
        textarea {
            border: 1px solid darkgray;
            padding: 10px;
            background-color: #f8f9fc;
            border-radius: 5px;
        }

        #ubah-form input[type='text']::placeholder {
            /* color: white; */
        }
    </style>
@endsection

@section('body')
    <script></script>
    <script>
        var mhs = @json($mhs)
    </script>
    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Mahasiswa</h1>
        </div>

        <div style='display: flex'>
            <div class="col-xl-3 mb-4">
                <div class="card border-left-primary shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Jumlah Mahasiswa</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($mhs) }} Mahasiswa
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-info-circle fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 mb-4">
                <div class="card border-left-primary shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Kontrol</div>
                                <div class="font-weight-bold text-primary text-uppercase">
                                    Tambah</div>
                            </div>
                            <a href='{{ route('mahasiswa.create') }}' class="col-auto btn btn-circle "
                                style='background-color: #4e73df'>
                                <i class="fas fa-arrow-right fa-x text-gray-300"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Mahasiswa</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Kelas</th>
                                <th style='text-align: center;'>Kontrol</th>
                            </tr>
                        </thead>
                        @foreach ($mhs as $data)
                            <tr class="text-gray-800" style=''>
                                <td id='' style="vertical-align: middle">
                                    {{ $data->nim }}
                                </td>
                                <td style="vertical-align: middle">{{ $data->nama }}</td>
                                <td style='max-width: 300px; '>
                                    {{ $data->des }}</td>
                                <td style="vertical-align: middle">{{ $data->kelas }}</td>
                                <td style="text-align: center; gap: 5px;">
                                    <span>
                                        <button
                                            onclick="openForm(`{{ route('mahasiswa.update', $data->id) }}`, '{{ $data->nim }}', '{{ $data->nama }}', '{{ $data->kelas }}', '{{ $data->des }}')"
                                            class="btn btn-warning btn-icon-split shadow">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-info-circle"></i>
                                            </span>
                                            <span class="text font-weight-bold">Detail</span>
                                        </button>
                                    </span>
                                    <span>
                                        <button
                                            onclick="openConfirmationModal('Konfirmasi Menghapus {{ $data->nim }} ?',`{{ route('mahasiswa.destroy', $data->id) }}`)"
                                            class="btn btn-danger btn-icon-split shadow ">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                            <span class="text font-weight-bold">Hapus</span>
                                        </button>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
