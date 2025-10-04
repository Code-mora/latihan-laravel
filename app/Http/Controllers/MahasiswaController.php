<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Classes;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // $data = Mahasiswa::all();
        // return view('mahasiswa.index', compact('data'));

        $data = Mahasiswa::with('kelas')->get();
        $kelas = Classes::all();
        return view('mahasiswa.index', compact('data', 'kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:mahasiswa,nama',
            'nim' => 'required|string|max:50|unique:mahasiswa,nim',
            'kelas_id' => 'required',
        ]);
        // dd($request->nama);

        Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->back()->with('success', 'Data mahasiswa berhasil ditambahkan');
        // Mahasiswa::create($request->only('nama', 'nim'));
        //     return redirect()->back();
    }
}

