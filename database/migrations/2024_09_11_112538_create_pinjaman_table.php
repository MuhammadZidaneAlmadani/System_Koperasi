<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_xx_xx_create_pinjaman_table.php
public function up()
{
    Schema::create('pinjaman', function (Blueprint $table) {
        $table->id();
        $table->string('nama_member'); // Nama lengkap member dari tabel 'members'
        $table->double('jumlah');
        $table->double('bunga')->nullable(); // Kolom untuk bunga
        $table->integer('tenor')->nullable(); // Kolom untuk tenor
        $table->enum('status_pinjaman', ['belum lunas', 'lunas', 'dalam proses'])->default('belum lunas');
        $table->date('tanggal_pinjaman');
        $table->timestamps();
    });

}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjaman');
    }
};
