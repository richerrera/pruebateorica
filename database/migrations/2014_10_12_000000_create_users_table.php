<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('modalidad');
            $table->string('tipo_costo');
            $table->timestamp('inicio');
            $table->timestamp('fin');
            $table->string('costo');
            $table->string('participantes');
            $table->string('ubicacion');
            $table->string('evaluaciones');
            $table->string('departamento');
            $table->string('municipio');
            $table->string('horas');
            $table->string('contrato');
            $table->string('orden');
            $table->timestamp('fecha');
            $table->timestamp('hora');
            $table->string('compra_bolsa');
            $table->string('item');
            $table->string('programa');
            $table->string('facilitador');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event');
    }
}
