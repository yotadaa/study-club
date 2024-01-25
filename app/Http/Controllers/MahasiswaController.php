<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        $mhs = Mahasiswa::all();
        return view('data', ['mhs' => $mhs]);
    }

    public function create($nim, $nama, $desk, $kelas)
    {
        $existingMahasiswa = Mahasiswa::where('nim', $nim)->first();
        if ($existingMahasiswa) {
            return view('mahasiswaExists');
        }
        Mahasiswa::create([
            "nim" => $nim,
            "nama" => $nama,
            "des" => $desk,
            "kelas" => $kelas
        ]);
        return "
        <script>
            window.location.href = '/mahasiswa';
        </script>
        ";
    }

    public function delete($id)
    {
        Mahasiswa::find($id)->delete();
        return "
        <script>
            window.location.href = '/mahasiswa';
        </script>
        ";
    }
}
