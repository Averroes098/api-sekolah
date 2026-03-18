<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('siswa', function (Blueprint $table) {
        $table->id();
        $table->string('nis');
        $table->string('nama');
        $table->string('gender');
        $table->string('tempat_lahir');
        $table->date('tgl_lahir');
        $table->string('email');
        $table->string('nama_ortu');
        $table->text('alamat');
        $table->string('phone_number');
        $table->foreignId('kelas_id')->nullable()->constrained('kelas')->onDelete('set null');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
