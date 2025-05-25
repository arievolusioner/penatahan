<?php

namespace App\Http\Controllers;

use App\Models\GaleriFoto;

class GaleriFotoController extends Controller
{
    public function index()
    {
        $categories = [
            ['slug' => 'semua', 'name' => 'Semua'],
            ['slug' => 'kolam-air-panas', 'name' => 'Kolam Air Panas'],
            ['slug' => 'jacuzzi', 'name' => 'Jacuzzi'],
            ['slug' => 'ho-river', 'name' => 'Ho River'],
            ['slug' => 'restaurant', 'name' => 'Restaurant'],
            ['slug' => 'penginapan', 'name' => 'Penginapan'],
        ];

        // Ambil foto aktif, urut berdasarkan kategori dan urutan
        $fotos = GaleriFoto::where('status', true)
            ->orderBy('kategori')
            ->orderBy('urutan')
            ->get();

        return view('galeri.foto', compact('categories', 'fotos'));
    }
}
