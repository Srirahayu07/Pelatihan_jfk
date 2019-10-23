<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip');
            $table->string('nama');
            $table->string('tmt_pns');
            $table->string('sk_cpns');
            $table->string('sk_pns');
            $table->string('pangkat');
            $table->string('sk_kp_terakhir');
            $table->string('unit_kerja');
            $table->string('pendidikan_terakhir');
            $table->string('ijazah');
            $table->string('jabatan');
            $table->string('jenis_pelatihan');
            $table->string('jenis_usulan_formasi');
            $table->string('email')->unique();
            $table->string('no_telp');
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
        Schema::dropIfExists('peserta');
    }
}
