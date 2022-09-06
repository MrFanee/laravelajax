<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MahasiswaEntry;
use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('data.mahasiswa');
    }

    public function store(Request $request)
    {
        $nama = $request->input('nama');
        $jurusan = $request->input('jurusan');
        $jk = $request->input('jk');

        $mahasiswa = MahasiswaEntry::create([
            'nama'  => $nama,
            'jurusan'   => $jurusan,
            'jk'    => $jk
        ]);

        if($mahasiswa) {
            return response()->json([
                'success' => true,
                'message' => 'Register Berhasil!'
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Register Gagal!'
            ], 400);
        }


    }
}

