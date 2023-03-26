<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('cuidadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fechaN');
            $table->char('sexo');
            $table->integer('parentesco');
            $table->string('lugarTrabajo');
            $table->integer('matricula');
            $table->integer('Telefono');
            $table->string('email')->unique();
            $table->integer('imagenP');
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
        //
        Schema::dropIfExists('cuidadores');
    }
};
