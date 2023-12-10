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
        Schema::create('kebakaran', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('lokasi');
            $table->string('jenis');
            $table->string('luas');
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
        Schema::dropIfExists('kebakaran');
    }
};
