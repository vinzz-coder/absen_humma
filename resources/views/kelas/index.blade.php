@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Data Kelas</h5>
        </div>

        <div class="card-body">
            <form action="/kelas" method="POST" class="mb-4">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" name="nama_kelas" class="form-control" placeholder="Nama Kelas" required>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-success">Tambah Kelas</button>
                    </div>
                </div>
            </form>

            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($kelas as $i => $k)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $k->nama_kelas }}</td>
                        <td>
                            <form action="/kelas/{{ $k->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center">Belum ada data kelas</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
