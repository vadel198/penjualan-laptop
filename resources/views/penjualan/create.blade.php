@extends('Layouts.Base')
@section('content')
<title>Tambah Data Laptop</title>
<div class="container">
    <h1 class="mt-4">Tambah Data Laptop</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('penjualan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" class="form-control" id="brand" name="brand" required>
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" class="form-control" id="model" name="model" required>
                </div>
                <div class="mb-3">
                    <label for="processor" class="form-label">Processor</label>
                    <input type="text" class="form-control" id="processor" name="processor" required>
                </div>
                <div class="mb-3">
                    <label for="ram" class="form-label">RAM</label>
                    <input type="text" class="form-control" id="ram" name="ram" required>
                </div>
                <div class="mb-3">
                    <label for="storage" class="form-label">Storage</label>
                    <input type="text" class="form-control" id="storage" name="storage" required>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" required>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">
                    @error('foto')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <a href="{{ route('penjualan.index') }}" class="btn btn-danger btn-sm">Kembali</a>
            </form>
        </div>
    </div>
@endsection
