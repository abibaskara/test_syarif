<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Http\Requests\nilaiRequest;

class NilaiController extends Controller
{
    //
    public function index()
    {
        $nilai = Nilai::with(['mahasiswa', 'mahasiswa.kelas', 'matakuliah', 'matakuliah.dosen'])->get();
        $mahasiswa = Mahasiswa::get();
        $matakuliah = Matakuliah::get();
        return view('nilai', [
            'nilai' => $nilai,
            'mahasiswa' => $mahasiswa,
            'matakuliah' => $matakuliah
        ]);
    }

    public function add(nilaiRequest $request)
    {
        Nilai::create($request->all());

        return redirect('nilai');
    }

    public function edit(Nilai $nilai)
    {
        $mahasiswa = Mahasiswa::get();
        $matakuliah = Matakuliah::get();
        return view('editNilai', [
            'nilai' => $nilai,
            'mahasiswa' => $mahasiswa,
            'matakuliah' => $matakuliah
        ]);
    }

    public function update(nilaiRequest $request, Nilai $nilai)
    {
        $nilai->update($request->all());

        return redirect('nilai');
    }

    public function destroy(Nilai $nilai)
    {
        $nilai->delete();
        return redirect('nilai');
    }
}