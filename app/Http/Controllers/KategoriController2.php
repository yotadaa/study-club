<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController2 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kategori = Kategori::all();
        return view("kategori", ['kategori' => $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Kategori::create([
            "nama_kategori" => $request->nama_kategori,
            "deskripsi" => $request->deskripsi
        ]);

        return redirect()->route('kategori.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $kategori = Kategori::all();
        foreach ($kategori as $each) {
            echo "$each->id: $each->nama_kategori <br>";
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        Kategori::find($id)->update([
            'nama_kategori' => 'Pakaian Anak',
            'deksripsi' => 'Semua jenis pakaian anak'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
