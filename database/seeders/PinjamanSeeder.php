<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PinjamanSeeder extends Seeder
{
    public function run()
    {
        DB::table('pinjaman')->insert([
            [
                'nama_member' => 'John Doe', // Menggunakan nama member
                'jumlah' => 5000000,
                'bunga' => 5.0, // Contoh bunga
                'tenor' => 12, // Contoh tenor dalam bulan
                'tanggal_pinjaman' => '2024-01-15',
                'status_pinjaman' => 'belum lunas', // Status default
            ],
            [
                'nama_member' => 'Jane Smith', // Menggunakan nama member
                'jumlah' => 10000000,
                'bunga' => 7.5, // Contoh bunga
                'tenor' => 24, // Contoh tenor dalam bulan
                'tanggal_pinjaman' => '2024-02-10',
                'status_pinjaman' => 'belum lunas', // Status default
            ],
        ]);
    }
}
