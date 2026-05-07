<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{



    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.index', compact('kelas'));
    }

    public function store(Request $request)
    {
        Kelas::create([
            'nama_kelas' => $request->nama_kelas
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        Kelas::findOrFail($id)->delete();
        return redirect()->back();
    }
}
