@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Absensi Siswa</h5>
        </div>

        <div class="card-body">
            <form action="/absensi" method="POST">
                @csrf

                <table class="table table-bordered table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th class="text-start">Nama</th>
                            <th>Kelas</th>
                            <th>Hadir</th>
                            <th>Izin</th>
                            <th>Sakit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($siswas as $i => $s)
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td class="text-start">{{ $s->nama }}</td>
                            <td>{{ $s->kelas }}</td>

                            <td>
                                <input type="radio" name="status[{{ $s->id }}]" value="Hadir">
                            </td>
                            <td>
                                <input type="radio" name="status[{{ $s->id }}]" value="Izin">
                            </td>
                            <td>
                                <input type="radio" name="status[{{ $s->id }}]" value="Sakit">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <button class="btn btn-success mt-3">Simpan Absensi</button>
            </form>
        </div>
    </div>
</div>
@endsection
