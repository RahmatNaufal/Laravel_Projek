<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnggotaRequest;
use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota::all();
        return view('anggota.index', ['anggota' => $anggota]);
    }

    public function create()
    {
        return view('anggota.create');
    }
    public function store(StoreAnggotaRequest $request)
    {
        Anggota::create($request->validated()
        );
        return redirect()->route('admin.anggota.index');
    }
    public function show(string $id)
    {
     
    }
    public function edit(Anggota $anggota)
    {
        return view('anggota.edit', ['anggota' => $anggota]);
    }
    public function update(Request $request, Anggota $anggota)
    {
        $anggota->update($request->only([
            'nama',
            'alamat',
            'no_telp',
            'tgl_lhr'
        ]));
        return redirect()->route('admin.anggota.index');
    }
    public function destroy($id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();
        return redirect()->route('admin.anggota.index');
    }
  
}
