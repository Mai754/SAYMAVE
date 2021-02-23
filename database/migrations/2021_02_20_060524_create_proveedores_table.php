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
            $table->string('nombre_del_encargado',15);
            $table->string('apellido_del_encargado',15);
            $table->string('nombre_de_la_empresa',15);
            $table->string('dirección_de_la_empresa',100);
            $table->char('numero_de_telefono_del_encargado', 8);
            $table->char('numero_de_telefono_de_la_empresa', 8);
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
