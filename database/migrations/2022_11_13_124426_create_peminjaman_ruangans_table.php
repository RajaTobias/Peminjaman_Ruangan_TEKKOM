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
        Schema::create('peminjaman_ruangans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Status');
            $table->string('id_user');
            $table->string('id_ruangan');
            $table->string('Keterangan');
            $table->time('Jam_mulai');
            $table->time('Jam_selesai');
            $table->dateTime('Tanggal');
            $table->string('Kegiatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman_ruangans');
    }
};
