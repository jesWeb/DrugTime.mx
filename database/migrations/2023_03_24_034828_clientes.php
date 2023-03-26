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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fechaN');
            $table->char('sexo');
            $table->integer('peso');
            $table->char('alergias');
            $table->string('enfermedades');
            $table->integer('Telefono');
            $table->integer('imagenU');
            $table->timestamps();
            //llave foranea
            //type user 
            $table->unsignedBigInteger('type_users_id');
            $table->foreign('type_users_id')->references('id')->on('type_users');
            //registro de usuarios
            $table->unsignedBigInteger('usuarios_new_id');
            $table->foreign('usuarios_new_id')->references('id')->on('usuarios_new');
            //cuidadores 
            $table->unsignedBigInteger('cuidadores_id');
            $table->foreign('cuidadores_id')->references('id')->on('cuidadores');
            // tratamientos
            $table->unsignedBigInteger('tratamientos_id');
            $table->foreign('tratamientos_id')->references('id')->on('tratamientos');
            //medicamentos 
            $table->unsignedBigInteger('medicamentos_id');
            $table->foreign('medicamentos_id')->references('id')->on('medicamentos');
            //maquinas
            $table->unsignedBigInteger('maquinas_id');
            $table->foreign('maquinas_id')->references('id')->on('maquinas');
            //estados
            $table->unsignedBigInteger('estados_id');
            $table->foreign('estados_id')->references('id')->on('estados');
            //municipios 
            $table->unsignedBigInteger('municipios_id');
            $table->foreign('municipios_id')->references('id')->on('municipios');



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
        Schema::dropIfExists('clientes');
    }
};
