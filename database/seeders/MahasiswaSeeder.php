<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("mahasiswa")->insert([
            'nama' => "M Wildan Hakimi Al-Azizi",
            'kelas' => "R-003",
            'nim' => 'F1E122087',
            'des' => 'Mahasiswa Sistem Informasi'
        ]);
        DB::table("mahasiswa")->insert([
            'nama' => "Muhammad Reyhan Alfarizi",
            'kelas' => "R-003",
            'nim' => 'F1E122056',
            'des' => 'Mahasiswa Sistem Informasi'
        ]);
    }
}
