<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->char('codigoDeFactura', 7);
            $table->char('Empleado', 13);
            $table->integer('id_cliente');
            $table->date('FechaDeLaVenta');
            $table->char('CodigoDeProducto', 6);
            $table->string('NombreProducto', 100);
            $table->integer('Cantidad');
            $table->string('TipoDeFactura', 20);
            $table->double('TotalAntes_DeImpuesto');
            $table->double('Impuesto');
            $table->double('PrecioTotal');
            $table->foreign('Empleado')->references('DNIEmpleado')->on('empleados');
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('CodigoDeProducto')->references('codigo_producto')->on('inventarios');
            $table->foreign('NombreProducto')->references('Nombre_del_producto')->on('inventarios');
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
        Schema::dropIfExists('ventas');
    }
}
