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
        Schema::create('laborans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama')->nullable();;
            $table->string('email')->nullable();
            $table->string('namaAwal')->nullable();
            $table->string('namaAkhir')->nullable();
            $table->string('organisasi')->nullable();
            $table->string('lokasi')->nullable();
            $table->bigInteger('noHP')->nullable();
            $table->date('tglLahir')->nullable();
            $table->string('uploadGambar')->nullable();
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
        Schema::dropIfExists('laborans');
    }
};
