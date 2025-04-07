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
    Schema::create('mgmp', function (Blueprint $table) {
        $table->string('id_sk', 10)->primary(); // ID MGMP format custom
        $table->string('nip'); // NIP Guru atau Pegawai
        $table->string('file_draft'); // Nama atau path file draft
        $table->enum('status', ['proses', 'selesai', 'gagal'])->default('proses'); // Status proses
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
        Schema::dropIfExists('mgmp');
    }
};
