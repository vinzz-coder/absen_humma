<?php

namespace App\Http\Controllers;
 use App\Models\Absen;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


public function index()
{
    $tidakHadir = Absen::with('siswa')
        ->whereIn('status', ['Izin', 'Sakit'])
        ->latest()
        ->get();

    return view('dashboard.dashboard', compact('tidakHadir'));
}
}
