<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_xx_xx_create_angsuran_table.php
public function up()
{
    Schema::create('angsuran', function (Blueprint $table) {
        $table->id();
        $table->string('nama_member'); // Nama lengkap member dari tabel 'pinjaman'
        $table->double('jumlah_angsuran');
        $table->date('tanggal_angsuran');
        $table->integer('nomor_angsuran')->nullable(); // Nomor angsuran ke-berapa
        $table->enum('status_angsuran', ['terbayar', 'tertunda'])->default('terbayar'); // Status angsuran
        $table->string('metode_pembayaran')->nullable(); // Metode pembayaran
        $table->timestamps();
    });

}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('angsuran');
    }
};
