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
            $table->string('nombredelencargado',15);
            $table->string('apellidodelencargado',15);
            $table->string('nombredelaempresa',15);
            $table->string('direccióndelaempresa',100);
            $table->char('numerodetelefonodelencargado', 8);
            $table->char('numerodetelefonodelaempresa', 8);
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
