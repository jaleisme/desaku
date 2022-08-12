<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_hunian')->default(0);
            $table->string('nik');
            $table->string('nama', 100);
            $table->string('ttl', 100);
            $table->text('alamat');
            $table->string('agama', 100);
            $table->string('status', 100);
            $table->string('pekerjaan', 100);
            $table->string('kewarganegaraan', 100);
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
        Schema::dropIfExists('penduduks');
    }
}
