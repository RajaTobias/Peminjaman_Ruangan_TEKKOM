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
        Schema::table('ruangans', function (Blueprint $table) {
            $table->integer('kursi')->nullable()->default(0);
            $table->integer('smart_tv')->nullable()->default(0);
            $table->integer('layar_proyektor')->nullable()->default(0);
            $table->integer('lcd_proyektor')->nullable()->default(0);
            $table->integer('ac')->nullable()->default(0);
            $table->integer('kapasitas')->nullable()->default(0);
            $table->integer('papan_tulis')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ruangans', function (Blueprint $table) {
            //
        });
    }
};
