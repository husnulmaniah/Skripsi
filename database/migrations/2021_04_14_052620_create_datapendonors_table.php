<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapendonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapendonors', function (Blueprint $table) {
            $table->id();
            $table->string('noTrans');
            // $table->date('tanggal');
            $table->foreignId('pendonorId')->constrained('_pendonors');
            $table->foreignId('petugasaftapsId')->constrained('petugasaftaps');
            $table->foreignId('petugasPengisiId')->constrained('petugas_hbs');
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
        Schema::dropIfExists('datapendonors');
    }
}
