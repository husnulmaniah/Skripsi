<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetugasaftapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugasaftaps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pendonorId')->constrained('_pendonors');
            $table->string('jenis');
            $table->string('noKantong');
            $table->string('pengesahan');
            $table->time('jamAftap');
            $table->string('status');
            $table->string('cc');
            $table->string('shift');
            $table->string('dgmu');
            $table->string('instansi');
            $table->string('Metode');
            $table->string('macamDonor');
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
        Schema::dropIfExists('petugasaftaps');
    }
}
