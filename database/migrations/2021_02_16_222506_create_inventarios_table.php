<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->char('codigo_producto', 6);
            $table->string('Nombre_del_producto', 100);
            $table->string('descripcion_del_producto', 3000);
            $table->double('precio_mayorista');
            $table->double('precio_compra');
            $table->double('precio_venta');
            $table->string('marcar_del_producto', 100);
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
        Schema::dropIfExists('inventarios');
    }
}
