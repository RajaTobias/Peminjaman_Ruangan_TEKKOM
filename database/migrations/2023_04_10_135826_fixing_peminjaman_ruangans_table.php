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
        Schema::table('peminjaman_ruangans', function (Blueprint $table) {
            $table->dropColumn('Tanggal');
            $table->dateTime('Jam_mulai')->change();
            $table->dateTime('Jam_selesai')->change();
            $table->string('Nama')->nullable()->change();
            $table->string('NIM')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peminjaman_ruangans', function (Blueprint $table) {
            //
        });
    }
};
