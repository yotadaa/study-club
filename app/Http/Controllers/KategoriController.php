<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //
    public function semua()
    {
        $kategori = Kategori::all();
        foreach ($kategori as $each) {
            echo "$each->id: $each->nama_kategori <br>";
        }
    }
}
