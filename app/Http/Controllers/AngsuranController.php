<?php

namespace App\Http\Controllers;

use App\Models\AngsuranModel;
use Illuminate\Http\Request;

class AngsuranController extends Controller
{
    // Menampilkan daftar angsuran
    public function index()
    {
        $angsurans = AngsuranModel::all();
        return view('angsuran.index', compact('angsurans'));
    }

    // Menampilkan form create
    public function create()
    {
        return view('angsuran.create');
    }

    // Menyimpan angsuran baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_member' => 'required|string|max:255',
            'jumlah_angsuran' => 'required|numeric',
            'tanggal_angsuran' => 'required|date',
            'nomor_angsuran' => 'required|integer',
            'status_angsuran' => 'required|in:terbayar,tertunda',
            'metode_pembayaran' => 'nullable|string|max:255',
        ]);

        AngsuranModel::create($validatedData);

        return redirect()->route('anggaran.index')->with('success', 'Angsuran berhasil ditambahkan.');
    }

    // Menampilkan detail angsuran
    public function show($id)
    {
        $angsuran = AngsuranModel::findOrFail($id);
        return view('angsuran.show', compact('angsuran'));
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $angsuran = AngsuranModel::findOrFail($id);
        return view('angsuran.edit', compact('angsuran'));
    }

    // Mengupdate angsuran
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_member' => 'required|string|max:255',
            'jumlah_angsuran' => 'required|numeric',
            'tanggal_angsuran' => 'required|date',
            'nomor_angsuran' => 'required|integer',
            'status_angsuran' => 'required|in:terbayar,tertunda',
            'metode_pembayaran' => 'nullable|string|max:255',
        ]);

        $angsuran = AngsuranModel::findOrFail($id);
        $angsuran->update($validatedData);
        return redirect()->route('anggaran.index')->with('success', 'Angsuran berhasil diupdate.');
    }

    // Menghapus angsuran
    public function destroy($id)
    {
        $angsuran = AngsuranModel::findOrFail($id);
        $angsuran->delete();
        return redirect()->route('anggaran.index')->with('success', 'Angsuran berhasil dihapus.');
    }
}
