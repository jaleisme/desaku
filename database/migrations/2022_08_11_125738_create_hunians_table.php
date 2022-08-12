<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuniansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hunians', function (Blueprint $table) {
            $table->id();
            $table->string('nik_kepala_keluarga');
            $table->string('no_kk');
            $table->text('lokasi');
            $table->string('luas_tanah');
            $table->string('luas_bangunan');
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
        Schema::dropIfExists('hunians');
    }
}
