<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinjamanModel extends Model
{
    use HasFactory;


    protected $table = 'pinjaman';

    protected $fillable = [
        'nama_member',
        'jumlah',
        'bunga',
        'tenor',
        'status_pinjaman',
        'tanggal_pinjaman',
    ];

    public $timestamps = true;
}
