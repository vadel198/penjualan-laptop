@extends('Layouts.Base')
@section('content')
    <div class="container mt-4">        
        <a href="{{ route('penjualan.create') }}" class="btn btn-primary btn-sm mb-3">Tambah Laptop</a>
        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">
                <h4 class="mb-0">Daftar Laptop</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Processor</th>
                            <th>RAM</th>
                            <th>Storage</th>
                            <th>Harga</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @forelse ($penjualans as $penjualan)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $penjualan->brand }}</td>
                                <td>{{ $penjualan->model }}</td>
                                <td>{{ $penjualan->processor }}</td>
                                <td>{{ $penjualan->ram }}</td>
                                <td>{{ $penjualan->storage }}</td>
                                <td>{{ $penjualan->harga}}</td>
                                <td>
                                    @if ($penjualan->foto)
                                        <img src="{{ asset('uploads/penjualan/' . $penjualan->foto) }}" 
                                            style="width: 200px; height: 135px; object-fit: cover;">
                                    @else
                                        <span class="text-muted">Tidak ada foto</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('penjualan.edit', $penjualan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('penjualan.destroy', $penjualan->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center">Tidak ada data laptop ditemukan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
