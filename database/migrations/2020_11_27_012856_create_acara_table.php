<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acara', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('foto');
            $table->string('judul');
            $table->string('keterangan', 2000);
            $table->integer('target')->unsigned();
            $table->date('batas_waktu');
            $table->integer('id_provinsi')->unsigned();
            $table->integer('id_kota')->unsigned();
            $table->integer('id_kecamatan')->unsigned();
            $table->integer('id_kelurahan')->unsigned();
            $table->enum('status', ['pengajuan', 'aktif', 'selesai']);
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
        Schema::dropIfExists('acara');
    }
}
