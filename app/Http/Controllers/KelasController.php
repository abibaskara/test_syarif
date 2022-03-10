<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Http\Requests\kelasRequest;

class KelasController extends Controller
{
    //

    public function index()
    {
        $kelas = Kelas::get();
        return view('kelas', [
            'kelas' => $kelas
        ]);
    }

    public function add(kelasRequest $request)
    {
        $data = new Kelas;
        $data->nama_kelas = $request->nama_kelas;
        $data->save();

        return redirect('kelas');
    }

    public function edit(Kelas $kelas)
    {
        return view('EditKelas', [
            'kelas' => $kelas
        ]);
    }

    public function update(kelasRequest $request, Kelas $kelas)
    {
        $kelas->update($request->all());
        return redirect('kelas');
    }

    public function destroy(Kelas $kelas)
    {
        $kelas->delete();
        return redirect('kelas');
    }
}