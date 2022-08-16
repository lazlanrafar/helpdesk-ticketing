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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pelapor');
            $table->integer('id_teknisi');
            $table->integer('id_sub_kategori');
            $table->integer('id_lokasi');
            $table->string('jenis_pengaduan');
            $table->date('tanggal_pengaduan');
            $table->date('tanggal_proses');
            $table->date('tanggal_selesai');
            $table->string('keterangan');
            $table->string('troubleshooting');
            $table->string('status');
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
        Schema::dropIfExists('tickets');
    }
};
