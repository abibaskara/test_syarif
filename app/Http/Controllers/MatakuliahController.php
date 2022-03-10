<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;
use App\Models\Dosen;
use App\Http\Requests\matakuliahRequest;

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

    public function add(matakuliahRequest $request)
    {
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

    public function update(matakuliahRequest $request, Matakuliah $matakuliah)
    {
        $matakuliah->update($request->all());

        return redirect('matkul');
    }

    public function destroy(Matakuliah $matakuliah)
    {
        $matakuliah->delete();
        return redirect('matkul');
    }
}