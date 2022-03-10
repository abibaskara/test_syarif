<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    //
    public function index()
    {
        $dosen = Dosen::get();
        return view('Dosen', [
            'dosen' => $dosen
        ]);
    }

    public function add(Request $request)
    {
        $request->validate([
            'nama_dosen' => 'required',
            'nip' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        $input = $request->all();
        Dosen::create($input);

        return redirect('dosen');
    }

    public function edit(Dosen $dosen)
    {
        $dosen = Dosen::findOrFail($dosen->id);
        return view('EditDosen', [
            'dosen' => $dosen
        ]);
    }

    public function update(Request $request, Dosen $dosen)
    {
        $request->validate([
            'nama_dosen' => 'required',
            'nip' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);
        $dosen->update($request->all());


        return redirect('dosen');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect('dosen');
    }
}