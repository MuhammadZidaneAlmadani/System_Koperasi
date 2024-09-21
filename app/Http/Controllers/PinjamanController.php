<?php

namespace App\Http\Controllers;

use App\Models\PinjamanModel;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    // Display a listing of the pinjamans
    public function index()
    {
        $pinjamans = PinjamanModel::all();
        return view('pinjaman.index', compact('pinjamans'));
    }

    // Show the form for creating a new pinjaman
    public function create()
    {
        return view('pinjaman.create');
    }

    // Store a newly created pinjaman in the database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_member' => 'required|string|max:255', // Menggunakan nama_member
            'jumlah' => 'required|numeric',
            'tanggal_pinjaman' => 'required|date',
            'bunga' => 'nullable|numeric', // Jika bunga opsional
            'tenor' => 'nullable|integer', // Jika tenor opsional
            'status_pinjaman' => 'required|in:belum lunas,lunas,dalam proses', // Validasi status
        ]);

        // Buat objek pinjaman baru
        $pinjaman = new PinjamanModel([
            'nama_member' => $request->get('nama_member'), // Gunakan nama_member
            'jumlah' => $request->get('jumlah'),
            'tanggal_pinjaman' => $request->get('tanggal_pinjaman'),
            'bunga' => $request->get('bunga'), // Bisa kosong jika tidak diisi
            'tenor' => $request->get('tenor'), // Bisa kosong jika tidak diisi
            'status_pinjaman' => $request->get('status_pinjaman'),
        ]);

        // Simpan data ke database
        $pinjaman->save();

        // Redirect ke halaman daftar pinjaman dengan pesan sukses
        return redirect()->route('pinjamans.index')->with('success', 'Pinjaman created successfully');
    }

    // Display the specified pinjaman
    public function show($id)
    {
        $pinjaman = PinjamanModel::findOrFail($id);
        return view('pinjaman.show', compact('pinjaman'));
    }

    // Show the form for editing the specified pinjaman
    public function edit($id)
    {
        $pinjaman = PinjamanModel::findOrFail($id);
        return view('pinjaman.edit', compact('pinjaman'));
    }

    // Update the specified pinjaman in the database
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_member' => 'required|string|max:255', // Ganti user_id dengan nama_member
            'jumlah' => 'required|numeric',
            'tanggal_pinjaman' => 'required|date',
            'bunga' => 'nullable|numeric', // Jika bunga opsional
            'tenor' => 'nullable|integer', // Jika tenor opsional
            'status_pinjaman' => 'required|in:belum lunas,lunas,dalam proses', // Validasi status
        ]);

        // Cari pinjaman berdasarkan ID dan update
        $pinjaman = PinjamanModel::findOrFail($id);
        $pinjaman->nama_member = $request->get('nama_member');
        $pinjaman->jumlah = $request->get('jumlah');
        $pinjaman->tanggal_pinjaman = $request->get('tanggal_pinjaman');
        $pinjaman->bunga = $request->get('bunga');
        $pinjaman->tenor = $request->get('tenor');
        $pinjaman->status_pinjaman = $request->get('status_pinjaman');
        $pinjaman->save();

        // Redirect ke halaman daftar pinjaman dengan pesan sukses
        return redirect()->route('pinjamans.index')->with('success', 'Pinjaman updated successfully');
    }

    // Remove the specified pinjaman from the database
    public function destroy($id)
    {
        $pinjaman = PinjamanModel::findOrFail($id);
        $pinjaman->delete();

        // Redirect ke halaman daftar pinjaman dengan pesan sukses
        return redirect()->route('pinjamans.index')->with('success', 'Pinjaman deleted successfully');
    }
}
