<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AngsuranModel extends Model
{
    use HasFactory;

    protected $table = 'angsuran'; // Nama tabel sesuai gambar

    protected $fillable = [
        'nama_member', // Mengganti pinjaman_id dengan nama_member
        'jumlah_angsuran',
        'tanggal_angsuran',
        'nomor_angsuran',
        'status_angsuran',
        'metode_pembayaran',
    ];

    // Jika diperlukan relasi ke tabel Pinjaman, tambahkan relasi (optional)
    // public function pinjaman()
    // {
    //     return $this->belongsTo(PinjamanModel::class, 'pinjaman_id');
    // }
}
