@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>{{ isset($mhs) ? 'Edit' : 'Tambah' }} Mahasiswa</h2>

    <form action="{{ isset($mhs) ? route('mahasiswa.update', $mhs->id) : route('mahasiswa.store') }}" method="POST">
        @csrf
        @if(isset($mhs)) @method('PUT') @endif

        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" value="{{ old('nim', $mhs->nim ?? '') }}" required>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $mhs->nama ?? '') }}" required>
        </div>
        <div class="mb-3">
            <label>Jurusan</label>
            <input type="text" name="jurusan" class="form-control" value="{{ old('jurusan', $mhs->jurusan ?? '') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($mhs) ? 'Update' : 'Simpan' }}</button>
    </form>
</div>
@endsection
