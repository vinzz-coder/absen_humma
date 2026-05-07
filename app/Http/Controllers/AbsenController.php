<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Siswa;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all();
        return view('absen.index', compact('siswas'));
    }

    public function store(Request $request)
    {
        foreach ($request->status as $siswa_id => $status) {
            Absen::create([
                'siswa_id' => $siswa_id,
                'status' => $status
            ]);
        }


        return redirect('/siswa')->with('success', 'Absensi berhasil!');
    }
}
