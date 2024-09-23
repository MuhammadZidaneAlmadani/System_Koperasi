<?php

namespace App\Http\Controllers;

use App\Models\LaporanPinjamanModel;
use App\Models\PinjamanModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanPinjamanController extends Controller
{
    // Menampilkan daftar laporan pinjaman
    public function index()
    {
        // $laporans = LaporanPinjamanModel::all();
        // return view('LaporanPinjaman.index', compact('laporans'));
        $laporans = PinjamanModel::all();
        return view('LaporanPinjaman.index', compact('laporans'));
    }

    // Menampilkan form create
    // public function create()
    // {
    //     return view('LaporanPinjaman.create');
    // }

    // Menyimpan laporan pinjaman baru
    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'pinjaman_id' => 'required|integer',
    //         'detail_laporan' => 'required|string',
    //     ]);

    //     LaporanPinjamanModel::create($validatedData);
    //     return redirect()->route('laporans.index')->with('success', 'Laporan Pinjaman berhasil ditambahkan.');
    // }

    // Menampilkan detail laporan pinjaman
    // public function show($id)
    // {
    //     $laporan = LaporanPinjamanModel::findOrFail($id);
    //     return view('LaporanPinjaman.show', compact('laporan'));
    // }

    // Menampilkan form edit
    // public function edit($id)
    // {
    //     $laporan = LaporanPinjamanModel::findOrFail($id);
    //     return view('LaporanPinjaman.edit', compact('laporan'));
    // }

    // Mengupdate laporan pinjaman
    // public function update(Request $request, $id)
    // {
    //     $validatedData = $request->validate([
    //         'pinjaman_id' => 'required|integer',
    //         'detail_laporan' => 'required|string',
    //     ]);

    //     $laporan = LaporanPinjamanModel::findOrFail($id);
    //     $laporan->update($validatedData);
    //     return redirect()->route('laporans.index')->with('success', 'Laporan Pinjaman berhasil diupdate.');
    // }

    // Menghapus laporan pinjaman
    // public function destroy($id)
    // {
    //     $laporan = LaporanPinjamanModel::findOrFail($id);
    //     $laporan->delete();
    //     return redirect()->route('laporans.index')->with('success', 'Laporan Pinjaman berhasil dihapus.');
    // }

    public function generatePDF()
    {
        // $laporans = LaporanPinjamanModel::join('pinjaman', 'laporan_pinjaman.pinjaman_id', '=', 'pinjaman.id')
        //     ->join('users', 'pinjaman.user_id', '=', 'users.id')
        //     ->select('laporan_pinjaman.*', 'pinjaman.*', 'users.name')
        //     ->get();

        // $pdf = Pdf::loadView('LaporanPinjaman.pdf', array('laporans' =>  $laporans));
        
        $pinjamans = PinjamanModel::all();
        $pdf = Pdf::loadView('LaporanPinjaman.pdf', array('laporans' =>  $pinjamans));

        // Return the generated PDF file for download
        return $pdf->download('laporan_pinjaman.pdf');
    }
}
