<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function index()
    {
        $pembelis = Pembeli::all();
        return view('data_pembeli.index', compact('pembelis'));
    }


    public function create($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        return view('pembeli.transaksi', compact('penjualan'));
    }
    
    public function store(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'alamat' => 'required|string',
        ]);
        
        try {
            // Dapatkan data penjualan berdasarkan ID
            $penjualan = Penjualan::findOrFail($id);
        
            // Siapkan data untuk penyimpanan transaksi
            $data = $request->all();
            $data['laptop_id'] = $id; // Simpan ID laptop terkait transaksi
            $data['brand'] = $penjualan->brand; // Dapatkan brand dari tabel Penjualan
            $data['harga'] = $penjualan->harga; // Dapatkan harga dari tabel Penjualan
        
            // Simpan transaksi ke tabel 'pembeli'
            Pembeli::create($data);
        
            return redirect()->route('pembeli.index')->with('success', 'Transaksi berhasil disimpan.');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    
    
    
    public function destroy($id)
    {
        try {
            $pembeli = Pembeli::findOrFail($id);

            if ($pembeli->foto && file_exists(public_path('uploads/pembeli/' . $pembeli->foto))) {
                unlink(public_path('uploads/pembeli/' . $pembeli->foto));
            }

            $pembeli->delete();

            return redirect()->route('data_pembeli.index')->with('success', 'Data pembeli berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('data_pembeli.index')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
