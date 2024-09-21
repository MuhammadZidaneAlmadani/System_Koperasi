<?php

namespace App\Http\Controllers;

use App\Models\PinjamanModel;
use App\Models\AngsuranModel;
use App\Models\PerjanjianModel;
use App\Models\LaporanPinjamanModel;
use App\Models\LaporanAngsuranModel;
use App\Models\MembersModel;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil data yang dibutuhkan untuk dashboard
        $data = [
            'pinjaman' => PinjamanModel::sum('jumlah'),
            'angsuran' => AngsuranModel::sum('jumlah_angsuran'),
            'perjanjian pinjaman' => PerjanjianModel::sum('nominal'), // Perhatikan spasi di sini
            'laporan pinjaman' => LaporanPinjamanModel::count(),
            'laporan angsuran' => LaporanAngsuranModel::count(),
            'peminjaman_terbaru' => PinjamanModel::orderBy('created_at', 'desc')->limit(5)->get(),
            'anggota_baru' => MembersModel::orderBy('created_at', 'desc')->limit(5)->get(),
        ];

        // Return ke view dashboard dengan data yang dikirim
        return view('dashboard', compact('data'));
    }
}
