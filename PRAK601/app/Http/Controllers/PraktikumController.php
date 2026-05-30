<?php

namespace App\Http\Controllers;

use App\Models\Praktikum;

class PraktikumController extends Controller
{
    public function index()
    {
        return view('pages.beranda', [
            'title'  => 'Beranda | Praktikum Modul 6',
            'profil' => Praktikum::getProfil()
        ]);
    }

    public function profil()
    {
        return view('pages.profil', [
            'title'      => 'Profil Praktikan',
            'profil'     => Praktikum::getProfil(),
            'pengalaman' => Praktikum::getPengalaman(),
            'gambar' => asset('images/pfp.jpeg'),
        ]);
    }

    public function detail($id)
    {
        $detail = Praktikum::getPengalamanById($id);

        if (!$detail) {
            abort(404, 'Data pengalaman tidak ditemukan.');
        }

        return view('pages.detail', [
            'title'  => 'Detail Pengalaman',
            'detail' => $detail
        ]);
    }
    
}