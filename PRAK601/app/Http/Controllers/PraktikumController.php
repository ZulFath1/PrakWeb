<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\Pengalaman;

class PraktikumController extends Controller
{
    public function index()
    {
        return view('pages.beranda', [
            'title'  => 'Beranda | Praktikum Modul 6',
            'profil' => Profil::first()
        ]);
    }

    public function profil()
    {
        return view('pages.profil', [
            'title'      => 'Profil Praktikan',
            'profil'     => Profil::first(),
            'pengalaman' => Pengalaman::all()
        ]);
    }

    public function detail($id)
    {
        $detail = Pengalaman::findOrFail($id);

        return view('pages.detail', [
            'title'  => 'Detail Pengalaman',
            'detail' => $detail
        ]);
    }
}