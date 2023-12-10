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
        Schema::create('titik_panas', function (Blueprint $table) {
            $table->id();
            $table->string('kecamatan');
            $table->string('lokasi');
            $table->string('tanggal');
            $table->string('jenis');
            $table->string('kerusakan');
            $table->string('long');
            $table->string('lat');
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
        Schema::dropIfExists('titik_panas');
    }
};
