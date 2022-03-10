<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;
use App\Models\Dosen;

class MatakuliahController extends Controller
{
    //
    public function index()
    {
        $matkul = Matakuliah::get();
        $dosen = Dosen::get();
        return view('Matkul', [
            'matkul' => $matkul,
            'dosen' => $dosen
        ]);
    }

    public function add(Request $request)
    {
        $request->validate([
            'id_dosen' => 'required',
            'nama_matkul' => 'required',
            'kode_matkul' => 'required',
        ]);

        Matakuliah::create($request->all());

        return redirect('matkul');
    }

    public function edit(Matakuliah $matakuliah)
    {
        $dosen = Dosen::get();
        return view('editMatakuliah', [
            'matakuliah' => $matakuliah,
            'dosen' => $dosen
        ]);
    }

    public function update(Request $request, Matakuliah $matakuliah)
    {
        $request->validate([
            'id_dosen' => 'required',
            'nama_matkul' => 'required',
            'kode_matkul' => 'required',
        ]);

        $matakuliah->update($request->all());

        return redirect('matkul');
    }

    public function destroy(Matakuliah $matakuliah)
    {
        $matakuliah->delete();
        return redirect('matkul');
    }
}