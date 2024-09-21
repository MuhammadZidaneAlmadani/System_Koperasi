<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaporanAngsuranSeeder extends Seeder
{
    public function run()
    {
        DB::table('laporan_angsuran')->insert([
            [
                'angsuran_id' => 1, // Ubah ke ID yang ada di tabel 'angsuran'
                'detail_laporan' => 'Laporan untuk angsuran pinjaman AG001',
            ],
        ]);

    }
}

