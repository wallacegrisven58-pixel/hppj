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
        Schema::create('permintaans', function (Blueprint $table) {
    $table->id();
    $table->string('kode')->unique();
    $table->string('layanan');
    $table->unsignedInteger('jumlah');
    $table->date('mulai_tugas')->nullable();
    $table->string('perusahaan');
    $table->string('kontak');
    $table->string('status')->default('baru');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permintaans');
    }
};
