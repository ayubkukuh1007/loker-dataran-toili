<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbLokerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_loker', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->string('nama_lembaga');
            $table->string('nomor_kontak');
            $table->string('email');
            $table->string('nama_pekerjaan');
            $table->string('id_lokasi_perkerjaan');
            $table->string('id_tipe_pekerjaan');
            $table->string('id_lulusan_pekerjaan');
            $table->longText('deskripsi');
            $table->dateTime('tanggal_posting')->useCurrent();
            $table->dateTime('tanggal_penutupan')->useCurrent();
            $table->string('estimasi_gaji');
            $table->string('image');
            $table->dateTime('create_date')->useCurrent();
            $table->dateTime('update_date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_loker');
    }
}
