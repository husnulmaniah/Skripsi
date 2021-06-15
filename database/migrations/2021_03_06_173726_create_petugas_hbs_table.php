<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetugasHbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas_hbs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dokterId')->constrained('petugas');
            $table->foreignId('pendonorId')->constrained('_pendonors');
            $table->string('tensi');
            $table->string('Hb');
            $table->string('aftap');
            $table->string('input');
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
        Schema::dropIfExists('petugas_hbs');
    }
}
