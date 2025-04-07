<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
{
    Schema::create('ijin_operasi', function (Blueprint $table) {
        $table->string('id_ijin', 10)->primary(); // ID format custom
        $table->string('file_pengajuan'); // Nama file pengajuan
        $table->enum('tracking', ['pengajuan', 'validasi', 'selesai', 'gagal'])->default('pengajuan'); // Status tracking
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ijin_operasi');
    }
};
