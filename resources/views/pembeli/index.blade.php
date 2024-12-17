<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1 class="text-white bg-dark py-3 shadow-sm">Penjualan Laptop</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            @forelse ($penjualans as $laptop)
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch mb-4">
                    <div class="card shadow-lg border-0 w-100">
                        <img src="{{ asset('uploads/penjualan/' . $laptop->foto) }}"                              
                             alt="{{ $laptop->model }}" style="width: 400px; height: 235px; object-fit: cover; display: block; margin: 20 auto;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-dark text-center">
                                <i class="fas fa-laptop mr-2"></i>{{ $laptop->brand }} - {{ $laptop->model }}
                            </h5>
                            <p class="card-text text-secondary text-center flex-grow-1">
                                <strong>Processor:</strong> {{ $laptop->processor }}<br>
                                <strong>RAM:</strong> {{ $laptop->ram }} GB<br>
                                <strong>Storage:</strong> {{ $laptop->storage }} GB<br>                                
                            </p>
                            <p class="text-success font-weight-bold text-center">
                                {{$laptop->harga}}
                            </p>
                            <a href="{{ route('pembeli.transaksi', $laptop->id) }}" style="text-decoration: none; color: white;" class="btn btn-success mt-2 w-100">
                                Beli Sekarang <i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center w-100">
                    
                </div>
            @endforelse
        </div>
    </div>
</section>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    /* Gaya Tombol Beli Sekarang */
.btn-success {
    background-color: #28a745; /* Warna Hijau yang mencolok */
    border: none;
    padding: 12px 20px; /* Membuat tombol lebih besar */
    font-size: 16px; /* Memperbesar teks tombol */
    font-weight: bold;
    border-radius: 50px; /* Membuat sudut tombol melengkung */
    text-transform: uppercase; /* Membuat teks semua huruf kapital */
    letter-spacing: 1px; /* Jarak antar huruf */
    transition: all 0.3s ease; /* Transisi animasi saat hover */
    box-shadow: 0 4px 10px rgba(40, 167, 69, 0.3); /* Tambahkan bayangan lembut */
    display: flex;
    justify-content: center; /* Menyelaraskan ikon dan teks di tengah */
    align-items: center;
}

.btn-success:hover {
    background-color: #218838; /* Ubah warna saat hover */
    box-shadow: 0 6px 12px rgba(40, 167, 69, 0.5); /* Tambahkan bayangan lebih besar saat hover */
    transform: translateY(-5px); /* Efek sedikit terangkat saat hover */
}

.btn-success i {
    margin-right: 10px; /* Menambahkan jarak antara ikon dan teks */
    font-size: 18px; /* Ukuran ikon sedikit lebih besar */
}

.btn-success:active {
    transform: translateY(2px); /* Efek saat tombol ditekan */
    box-shadow: none; /* Menghapus bayangan saat tombol ditekan */
}

/* Gaya saat tombol dinonaktifkan (misalnya saat stok habis) */
.btn-disabled {
    background-color: #ddd; /* Tombol abu-abu */
    cursor: not-allowed; /* Menambahkan kursor yang tidak diperbolehkan */
    box-shadow: none;
    pointer-events: none; /* Menonaktifkan interaksi dengan tombol */
}

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f6f9;
        margin-top: 20px;
    }

    h1 {
        font-size: 28px;
        letter-spacing: 1px;
    }

    .container-fluid {
        padding: 20px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center; /* Mengatur konten di tengah */
    }

    .card {
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
        background: #ffffff;
        min-height: 100%;
        margin: 10px; /* Menambahkan margin agar simetris */
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* Membuat elemen dalam kartu rata atas bawah */
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }

    .card-img-top {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-body {
        padding: 20px;
        text-align: center;
        display: flex;
        flex-direction: column;
    }

    .card-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 12px;
        color: #343a40;
    }

    .card-text {
        font-size: 14px;
        color: #495057;
        margin-bottom: 16px;
        flex-grow: 1; /* Membuat bagian ini fleksibel */
    }

    .btn-success {
        background-color: #28a745;
        border: none;
        padding: 10px 15px;
        font-size: 14px;
        transition: background-color 0.2s ease;
    }

    .btn-success:hover {
        background-color: #218838;
    }

    .text-success {
        color: #28a745 !important;
    }

    .text-muted {
        font-size: 14px;
        color: #6c757d;
    }

    .shadow-lg {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Memberikan margin antar kartu yang simetris */
    .mb-4 {
        margin-bottom: 20px !important;
    }
</style>
