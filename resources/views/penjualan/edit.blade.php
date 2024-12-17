@extends('Layouts.Base')
@section('content')
<div class="container px-4">
    <h1 class="mt-4">Update Data Laptop</h1>
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('penjualan.update', $penjualan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" class="form-control" id="brand" name="brand" value="{{ $penjualan->brand }}" required>
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" class="form-control" id="model" name="model" value="{{ $penjualan->model }}" required>
                </div>
                <div class="mb-3">
                    <label for="processor" class="form-label">Processor</label>
                    <input type="text" class="form-control" id="processor" name="processor" value="{{ $penjualan->processor }}" required>
                </div>
                <div class="mb-3">
                    <label for="ram" class="form-label">RAM</label>
                    <input type="text" class="form-control" id="ram" name="ram" value="{{ $penjualan->ram }}" required>
                </div>
                <div class="mb-3">
                    <label for="storage" class="form-label">Storage</label>
                    <input type="text" class="form-control" id="storage" name="storage" value="{{ $penjualan->storage }}" required>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="{{ $penjualan->harga }}" required>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    @if ($penjualan->foto)
                        <div class="mb-2">
                            <img src="{{ asset('uploads/penjualan/' . $penjualan->foto) }}" class="img-thumbnail" style="width: 150px;">
                        </div>
                    @endif
                    <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">
                    @error('foto')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
                <a href="{{ route('penjualan.index') }}" class="btn btn-danger btn-sm">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
