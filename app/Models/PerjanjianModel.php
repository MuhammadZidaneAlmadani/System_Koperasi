<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerjanjianModel extends Model
{
    use HasFactory;

    protected $table = 'perjanjian_pinjaman'; // Nama tabel

    protected $fillable = [
        'pinjaman_id',
        'nominal', // Tambahkan nominal
        'detail_perjanjian',
        'created_at',
        'updated_at',
    ];

    // Definisi relasi ke tabel pinjaman
    public function pinjaman()
    {
        return $this->belongsTo(PinjamanModel::class, 'pinjaman_id');
    }
}
