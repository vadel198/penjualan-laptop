<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pembeli</title>
    <!-- Include Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Custom CSS for Additional Styling -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 10px;
            border: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            font-size: 1.25rem;
            font-weight: bold;
            border-radius: 10px 10px 0 0;
        }
        .form-control-lg {
            height: calc(2.25rem + 2px);
            font-size: 1.1rem;
        }
        .form-label {
            font-weight: 500;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            font-size: 1.1rem;
            padding: 12px 20px;
            border-radius: 50px;
        }
        .btn-success:hover {
            background-color: #218838;
        }
        .img-fluid {
            max-height: 300px;
            object-fit: cover;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
            border-color: #007bff;
        }
        
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header text-center py-4">
                    <h4>Formulir Transaksi</h4>
                </div>
                <div class="card-body">
                    <form id="transaction-form" action="{{ route('pembeli.store', $penjualan->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Nama -->
                        <div class="form-group mb-4">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Masukkan nama lengkap" required>
                        </div>

                        <!-- Nomor Telepon -->
                        <div class="form-group mb-4">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <input type="tel" class="form-control form-control-lg" id="phone" name="phone" placeholder="Masukkan nomor telepon" required>
                        </div>

                        <!-- Alamat -->
                        <div class="form-group mb-4">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control form-control-lg" id="alamat" name="alamat" rows="4" placeholder="Masukkan alamat lengkap" required></textarea>
                        </div>

                        <!-- Model Laptop -->
                        <div class="form-group mb-4">
                            <label for="model" class="form-label">Merek dan model laptop</label>
                            <input type="text" class="form-control form-control-lg" id="model" name="model" value="{{ $penjualan->brand }} - {{ $penjualan->model }}" readonly>
                        </div>

                        <!-- Foto Laptop -->
                        <div class="form-group mb-4">
                            <label for="foto" class="form-label">Foto Laptop</label><br>                           
                            <img id="foto-preview" src="{{ asset('uploads/penjualan/' . $penjualan->foto) }}" alt="Foto Laptop" class="img-fluid mt-3">
                        </div>

                        <!-- Harga -->
                        <div class="form-group mb-4">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control form-control-lg" id="harga" name="harga" value="{{ $penjualan->harga }}" readonly>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success btn-lg">Transaksi</button>
                        </div><br>
                        <div class="d-grid gap-2">
                            <a href="{{ route('pembeli.index') }}" class="btn btn-danger btn-lg">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Include SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

<!-- Custom Script for SweetAlert -->
<script>
    document.getElementById('transaction-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting immediately
        
        var form = this;
        
        // Show SweetAlert success notification with "OK" button
        Swal.fire({
            icon: 'success',
            title: 'Transaksi Berhasil!',
            text: 'Data pembeli telah disimpan.',
            showConfirmButton: true,  // Show the "OK" button
            confirmButtonText: 'OK'  // Customize the button text
        }).then(function() {
            // After SweetAlert, submit the form
            form.submit();
        });
    });
</script>


</body>
</html>

