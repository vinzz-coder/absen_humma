<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Absen;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data = Siswa::all();

        // ambil absensi terbaru per siswa
        foreach ($data as $d) {
            $absen = Absen::where('siswa_id', $d->id)->latest()->first();
            $d->status = $absen ? $absen->status : '-';
        }

        return view('siswa.index', compact('data'));
    }

    public function store(Request $request)
    {
        Siswa::create($request->all());
        return back();
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());
        return redirect('/siswa')->with('success', 'Data siswa berhasil diperbarui');
    }
}
