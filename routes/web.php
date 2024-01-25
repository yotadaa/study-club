<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KategoriController2;
use App\Models\Kategori;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome', ['title' => 'mahasiswa sistem informasi']);
// });

Route::get('/', function () {
    return view('index');
});

Route::get('feature/{uri}', function ($uri) {
    if ($uri == 'dashboard') {
        return view('index');
    } else if ($uri != 'dashboard') {
        return view($uri);
    } else {
        return view('404');
    }
});

Route::resource('kategori', KategoriController2::class);

// Route::get('kategori/tambah', function () {
//     Kategori::create([
//         "nama_kategori" => "Pakaian Baru",
//         "deskripsi" => "Semua jenis pakaian baru"
//     ]);
// });
// Route::get('kategori/tambah/{value}', function ($value) {
//     $query = explode('_', $value);
//     Kategori::create([
//         "nama_kategori" => $query[0],
//         "deskripsi" => $query[1]
//     ]);
// });

// Route::get("/tes/{value}_{v2}", function ($value, $v2) {
//     return "$value $v2";
// });

// Route::get('kategori/update/{id}', function ($id) {
//     Kategori::find($id)->update([
//         'nama_kategori' => 'Pakaian Anak',
//         'deksripsi' => 'Semua jenis pakaian anak'
//     ]);
// });

// Route::get('kategori/hapus/{id}', function ($id) {
//     Kategori::find($id)->delete();
// });

// Route::get('/mahasiswa', function () {
//     $mhs = Mahasiswa::all();
//     return view('data', ['mhs' => $mhs]);
// });


// Route::get('/mahasiswa/tambah/{nim}_{nama}_{desk}_{kelas}', function ($nim, $nama, $desk, $kelas) {
//     $existingMahasiswa = Mahasiswa::where('nim', $nim)->first();
//     if ($existingMahasiswa) {
//         return view('mahasiswaExists');
//     }
//     Mahasiswa::create([
//         "nim" => $nim,
//         "nama" => $nama,
//         "des" => $desk,
//         "kelas" => $kelas
//     ]);
//     return "
// <script>
//     window.location.href = '/mahasiswa';
// </script>
//    ";
// });


// Route::get('/mahasiswa/hapus/{id}', function ($id) {
//     return "
// <script>
//     alert('$id');
//     window.location.href = '/mahasiswa';
// </script>
//     ";
// });

Route::get('/dashboard', function () {
    return view('index');
})->name('dashboard');

use App\Http\Controllers\MahasiswaControllers;

Route::resource('mahasiswa', MahasiswaControllers::class);
