<?php

namespace App\Http\Controllers;

use App\Models\PerjanjianModel;
use Illuminate\Http\Request;
use App\Models\PerjanjianPinjaman;
use Barryvdh\DomPDF\Facade\Pdf;

class PerjanjianPinjamanController extends Controller
{
    // Halaman awal (index)
    public function index()
    {
        $perjanjians = PerjanjianModel::all();
        return view('perjanjian.index', compact('perjanjians'));
    }

    // Menampilkan form create
    public function create()
    {
        return view('perjanjian.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pinjaman_id' => 'required|integer',
            'nominal' => 'required|numeric', // Validasi nominal
            'detail_perjanjian' => 'required|string|max:255',
        ]);

        PerjanjianModel::create($validatedData);
        return redirect()->route('perjanjian.index')->with('success', 'Perjanjian berhasil ditambahkan.');
    }

    // Menampilkan detail perjanjian
    public function show($id)
    {
        $perjanjian = PerjanjianModel::findOrFail($id);
        return view('perjanjian.show', compact('perjanjian'));
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $perjanjian = PerjanjianModel::findOrFail($id);
        return view('perjanjian.edit', compact('perjanjian'));
    }

    // Mengupdate data
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'pinjaman_id' => 'required|integer',
            'nominal' => 'required|numeric', // Validasi nominal
            'detail_perjanjian' => 'required|string|max:255',
        ]);

        $perjanjian = PerjanjianModel::findOrFail($id);
        $perjanjian->update($validatedData);
        return redirect()->route('perjanjian.index')->with('success', 'Perjanjian berhasil diupdate.');
    }

    // Menghapus data
    public function destroy($id)
    {
        $perjanjian = PerjanjianModel::findOrFail($id);
        $perjanjian->delete();
        return redirect()->route('perjanjian.index')->with('success', 'Perjanjian berhasil dihapus.');
    }

    public function generatePDF()
    {
        $perjanjianPinjaman = PerjanjianModel::join('pinjaman', 'perjanjian_pinjaman.pinjaman_id', '=', 'pinjaman.id')
            ->join('users', 'pinjaman.user_id', '=', 'users.id')
            ->select('perjanjian_pinjaman.*', 'pinjaman.nominal', 'pinjaman.tanggal_pinjaman', 'users.name') // Tambahkan nominal dan tanggal
            ->get();

        $pdf = Pdf::loadView('Perjanjian.pdf', array('perjanjianPinjaman' =>  $perjanjianPinjaman));

        return $pdf->download('perjanjian_pinjaman.pdf');
    }
}
