@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="card shadow-sm">
        <div class="card-header">
            Data Siswa Tidak Hadir
        </div>

        <div class="card-body">

            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($tidakHadir as $i => $data)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $data->siswa->nama }}</td>
                        <td>
                            <span class="badge
                                {{ $data->status == 'izin' ? 'bg-warning' : 'bg-danger' }}">
                                {{ $data->status }}
                            </span>
                        </td>
                        <td>{{ date('d-m-Y', strtotime($data->created_at)) }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">Semua siswa hadir 🎉</td>
                    </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </div>

</div>
@endsection
