<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        // Ambil semua data laptop yang dijual
        $penjualans = Penjualan::all();
        return view('penjualan.index', compact('penjualans'));
    }

    
    public function item()
    {
        // Ambil semua data penjualan
        $penjualans = Penjualan::all();
        return view('pembeli.index', compact('penjualans'));
    }
    

    public function create()
    {
        return view('penjualan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required|string|max:100',
            'model' => 'required|string|max:100',
            'processor' => 'required|string|max:100',
            'ram' => 'required|string|max:50',
            'storage' => 'required|string|max:50',
            'harga' => 'required',
            'foto' => 'nullable|image|max:10000',
        ]);

        try {
            $data = $request->all();

            // Proses upload file foto jika ada
            if ($request->hasFile('foto')) {
                $fileName = time() . '_' . $request->foto->getClientOriginalName();
                $request->foto->move(public_path('uploads/penjualan'), $fileName);
                $data['foto'] = $fileName;
            }

            Penjualan::create($data); // Simpan data laptop

            return redirect()->route('penjualan.index')->with('success', 'Data laptop berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->route('penjualan.create')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        // Ambil data laptop berdasarkan ID
        $penjualan = Penjualan::findOrFail($id);
        return view('penjualan.edit', compact('penjualan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'brand' => 'required|string|max:100',
            'model' => 'required|string|max:100',
            'processor' => 'required|string|max:100',
            'ram' => 'required|string|max:50',
            'storage' => 'required|string|max:50',
            'harga' => 'required',
            'foto' => 'nullable|image|max:10000',
        ]);

        try {
            $penjualan = Penjualan::findOrFail($id);
            $data = $request->all();

            // Ganti file foto jika ada file baru
            if ($request->hasFile('foto')) {
                if ($penjualan->foto && file_exists(public_path('uploads/penjualan/' . $penjualan->foto))) {
                    unlink(public_path('uploads/penjualan/' . $penjualan->foto));
                }

                $fileName = time() . '_' . $request->foto->getClientOriginalName();
                $request->foto->move(public_path('uploads/penjualan'), $fileName);
                $data['foto'] = $fileName;
            }

            $penjualan->update($data); // Update data laptop

            return redirect()->route('penjualan.index')->with('success', 'Data laptop berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->route('penjualan.index')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $penjualan = Penjualan::findOrFail($id);

            // Hapus file foto jika ada
            if ($penjualan->foto && file_exists(public_path('uploads/penjualan/' . $penjualan->foto))) {
                unlink(public_path('uploads/penjualan/' . $penjualan->foto));
            }

            $penjualan->delete();

            return redirect()->route('penjualan.index')->with('success', 'Data laptop berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('penjualan.index')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
