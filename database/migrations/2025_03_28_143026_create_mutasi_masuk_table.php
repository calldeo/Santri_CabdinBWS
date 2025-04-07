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
        Schema::create('mutasi_masuk', function (Blueprint $table) {
            $table->string('id_mut_masuk', 20)->primary(); // ID format MSK12345
            $table->string('file_skk');
            $table->string('file_nisn');
            $table->string('file_raport');
            $table->string('file_skm');
            $table->enum('status', ['proses', 'selesai', 'gagal'])->default('proses');
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
        Schema::dropIfExists('mutasi_masuk');
    }
};
