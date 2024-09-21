<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AngsuranSeeder extends Seeder
{
    public function run()
    {
        DB::table('angsuran')->insert([
            [
                'nama_member' => 'John Doe', // Menggunakan nama member
                'jumlah_angsuran' => 1000000,
                'tanggal_angsuran' => '2024-03-01',
                'nomor_angsuran' => 1, // Nomor angsuran ke-1
                'status_angsuran' => 'terbayar', // Status default
                'metode_pembayaran' => 'transfer', // Contoh metode pembayaran
            ],
            [
                'nama_member' => 'Jane Smith', // Menggunakan nama member
                'jumlah_angsuran' => 1500000,
                'tanggal_angsuran' => '2024-03-15',
                'nomor_angsuran' => 1, // Nomor angsuran ke-1 untuk Jane
                'status_angsuran' => 'terbayar', // Status default
                'metode_pembayaran' => 'cash', // Contoh metode pembayaran
            ],
        ]);
    }
}
