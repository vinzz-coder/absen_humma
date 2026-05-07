@extends('layouts.app')

@section('content')

<div class="card p-3">
    <h5>DATA SISWA</h5>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Kelas</th>
                <th>Status Kehadiran</th>
            </tr>
        </thead>

        <tbody>
            @foreach($data as $index => $d)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->nis }}</td>
                <td>{{ $d->kelas }}</td>

                <!-- STATUS ABSENSI -->
                <td>
                    @php
                        $absen = \App\Models\Absen::where('siswa_id', $d->id)->latest()->first();
                    @endphp

                    @if($absen)
                        @if($absen->status == 'Hadir')
                            <span class="badge bg-success">Hadir</span>
                        @elseif($absen->status == 'Izin')
                            <span class="badge bg-warning">Izin</span>
                        @elseif($absen->status == 'Sakit')
                            <span class="badge bg-danger">Sakit</span>
                        @endif
                    @else
                        <span class="badge bg-secondary">Belum Absen</span>
                    @endif
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
