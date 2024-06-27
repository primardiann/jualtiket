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
        Schema::create('konsers', function (Blueprint $table) {
            $table->id();
            $table->string('nama_konser');
            $table->date('tanggal');
            $table->decimal('harga', 8, 2);
            $table->string('waktu');
            $table->string('lokasi');
            $table->string('nama_artis');
            $table->text('deskripsi');
            $table->string('foto_konser')->nullable();
            $table->date('tanggal_awal');
            $table->date('tanggal_akhir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsers');
    }
};
