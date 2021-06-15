<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_pendonors', function (Blueprint $table) {
            $table->id();
            $table->string('noId');
            $table->string('nama');      
            $table->string('ponsel');    
            $table->string('email');    
            $table->string('noKartu');    
            $table->string('jk');    
            $table->string('alamat');    
            $table->string('Kecamatan');    
            $table->string('Kota');    
            $table->foreignId('pekerjaan_id')->constrained('pekerjaans');    
            $table->string('tempatLahir');    
            $table->date('TanggalLahir');       
            $table->string('penghargaan');
            $table->string('gol');
            $table->string('resus');
            $table->string('dsdp');
            $table->string('baru');    
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
        Schema::dropIfExists('_pendonors');
    }
}
