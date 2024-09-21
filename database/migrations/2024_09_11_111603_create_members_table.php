<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_xx_xx_create_members_table.php
public function up()
{
    Schema::create('members', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        $table->string('member_code')->unique();
        $table->string('nama_lengkap'); // Nama lengkap tanpa pemisahan depan dan belakang
        $table->string('alamat')->nullable(); // Alamat
        $table->string('nomor_telepon')->nullable(); // Nomor telepon
        $table->enum('status_member', ['aktif', 'non-aktif'])->default('aktif');
        $table->date('registration_date');
        $table->timestamps();
    });

}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
