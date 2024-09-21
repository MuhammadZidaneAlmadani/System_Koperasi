<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembersSeeder extends Seeder
{
    public function run()
    {
        DB::table('members')->insert([
            [
                'user_id' => 1, // Asumsikan id 1 untuk John Doe
                'member_code' => 'AG001',
                'nama_lengkap' => 'John Doe', // Nama lengkap ditambahkan
                'registration_date' => '2024-01-01',
            ],
            [
                'user_id' => 2,
                'member_code' => 'AG002',
                'nama_lengkap' => 'Jane Smith', // Nama lengkap ditambahkan
                'registration_date' => '2024-01-02'
            ]
        ]);
    }
}
