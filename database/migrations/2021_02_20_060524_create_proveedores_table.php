<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->String('Nombre del encargado',15);
            $table->String('Apellido del encargado',15);
            $table->String('Nombre de la empresa',15);
            $table->String('Dirección de la empresa',100);
            $table->Char('Numero de telefono del encargado',8);
            $table->Char('Numero de telefono de la empresa',8);
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
        Schema::dropIfExists('proveedores');
    }
}
