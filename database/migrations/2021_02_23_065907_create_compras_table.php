<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->char('codigoDeFactura', 7);
            $table->char('Empleado', 13);
            $table->integer('IdProveedor');
            $table->string('NombreEmpresa', 15);
            $table->date('FechaDeLaCompra');
            $table->char('CodigoDeProducto', 6);
            $table->string('NombreProducto', 100);
            $table->integer('Cantidad');
            $table->string('TipoDeFactura', 20);
            $table->double('TotalAntes_DeImpuesto');
            $table->double('Impuesto');
            $table->double('PrecioTotal');
            $table->foreign('Empleado')->references('DNIEmpleado')->on('empleados');
            $table->foreign('NombreEmpresa')->references('nombre_empresa')->on('proveedores');
            $table->foreign('IdProveedor')->references('id')->on('proveedores');
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
        Schema::dropIfExists('compras');
    }
}
