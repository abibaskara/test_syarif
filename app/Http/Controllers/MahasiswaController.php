<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Kelas;
use App\Http\Requests\mahasiswaRequest;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        $mahasiswa = Mahasiswa::with(['Kelas'])->get();
        $kelas = Kelas::get();
        return view('mahasiswa', [
            'mahasiswa' => $mahasiswa,
            'kelas' => $kelas
        ]);
    }

    public function add(mahasiswaRequest $request)
    {
        $input = $request->all();
        Mahasiswa::create($input);

        return redirect('mahasiswa');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        $kelas = Kelas::get();
        return view('EditMahasiswa', [
            'mahasiswa' => $mahasiswa,
            'kelas' => $kelas
        ]);
    }

    public function update(mahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->update($request->all());
        return redirect('mahasiswa');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect('mahasiswa');
    }
}