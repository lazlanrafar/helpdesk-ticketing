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
            $table->integer('id_teknisi')->nullable();
            $table->integer('id_sub_kategori');
            $table->integer('id_lokasi');
            $table->string('jenis_pengaduan');
            $table->dateTime('tanggal_pengaduan');
            $table->dateTime('tanggal_proses')->nullable();
            $table->dateTime('tanggal_selesai')->nullable();
            $table->text('keterangan');
            $table->text('troubleshooting')->nullable();
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
