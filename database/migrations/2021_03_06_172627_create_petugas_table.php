<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
            $table->string('ponsel');
            $table->foreignId('jabatanId')->constrained('jabatans');
            $table->foreignId('tenagaId')->constrained('tenagas');
            $table->foreignId('pendidikanId')->constrained('pendidikans');
            $table->foreignId('tingkatPend_Id')->constrained('tingkat_pends');
            $table->foreignId('statusPegawai_Id')->constrained('status_pegawai');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petugas');
    }
}
