<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggantiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengganti', function (Blueprint $table) {
            $table->id();
            $table->string('noId');
            $table->string('nama'); 
            $table->string('pasien');     
            $table->string('ponsel');     
            $table->string('jk');    
            $table->string('alamat');    
            $table->string('Kecamatan');       
            $table->foreignId('pekerjaan_id')->constrained('pekerjaans');    
            $table->string('tempatLahir');    
            $table->date('TanggalLahir');    
            $table->string('gol');
            $table->string('resus');    
            $table->date('donorTerakhir');    
            $table->string('donorKe'); 
            $table->time('jam');      
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
        Schema::dropIfExists('pengganti');
    }
}
