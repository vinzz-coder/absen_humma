@extends('layouts.app')

@section('content')

<div class="card p-3">
    <h4>Edit Siswa</h4>

    <form method="POST" action="/siswa/{{ $siswa->id }}">
        @csrf
        @method('PUT')

        <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control mb-2">
        <input type="text" name="nis" value="{{ $siswa->nis }}" class="form-control mb-2">
        <input type="text" name="kelas" value="{{ $siswa->kelas }}" class="form-control mb-2">

        <button class="btn btn-success">Update</button>
        <a href="/siswa" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@endsection
