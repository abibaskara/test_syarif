<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Http\Requests\dosenRequest;

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

    public function add(dosenRequest $request)
    {
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

    public function update(dosenRequest $request, Dosen $dosen)
    {

        $dosen->update($request->all());
        
        return redirect('dosen');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect('dosen');
    }
}