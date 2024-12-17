@extends('Layouts.Base')

@section('content')

<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Daftar Pembeli</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Telepon</th>
                            <th>Alamat</th>              
                            <th>Merek dan Model</th>
                            <th>Harga Laptop</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pembelis as $pembeli)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pembeli->name }}</td>
                            <td>{{ $pembeli->phone }}</td>
                            <td>{{ $pembeli->alamat }}</td>
                            <td>{{ $pembeli->model }}</td>
                            <td>{{ $pembeli->harga }}</td>
                            <td>
                                <!-- Tombol Edit -->                               
                                <!-- Tombol Hapus -->
                                <form action="{{ route('pembeli.destroy', $pembeli->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center">Tidak ada data pembeli ditemukan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('layouts.scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection

@section('layouts.styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
@endsection

<style>
    .table {
        white-space: nowrap;
    }
</style>
