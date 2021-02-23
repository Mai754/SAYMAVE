<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->char('DNIEmpleado', 13);
            $table->string('PrimerNombre', 15);
            $table->string('SegundoNombre', 15);
            $table->string('PrimerApellido', 15);
            $table->string('SegundoApellido', 15);
            $table->string('DireccionEmpleado', 100);
            $table->Date('FechaDeNacimiento');
            $table->char('TelefonoEmpleado');
            $table->string('PuestoEmpleado');
            $table->char('ContactoDeEmergencia');
            $table->string('FotoDeEmpleado');           
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
        Schema::dropIfExists('empleados');
    }
}
