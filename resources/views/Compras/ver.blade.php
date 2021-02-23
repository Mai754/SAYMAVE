@extends('plantilla.madre')

<div class="container">
    <table class="table">
            <thead class="thead-light">
                <tr>
                    <th >Campo</th>
                    <th >Valor</th>
                </tr>
            </thead>
            <tr>
                <th scope="col">Codigo De Factura</th>
                <td>{{$inventarios->codigoDeFactura}}</td>
            </tr>
            <tr>
                <th scope="col">DNI De Empleado</th>
                <td>{{$inventarios->DNIEmpleado}}</td>
            </tr>
            <tr>
                <th scope="col">Id De Proveedor</th>
                <td>{{$inventarios->IdProveedor}}</td>
            </tr>
            <tr>
                <th scope="col">Nombre De La Empresa</th>
                <td>{{$inventarios->NombreEmpresa}}</td>
            </tr>
            <tr>
                <th scope="col">Fecha De La Compra</th>
                <td>{{$inventarios->FechaDeLaCompra}}</td>
            </tr>
            <tr>
                <th scope="col">Codigo De Producto</th>
                <td>{{$inventarios->CodigoDeProducto}}</td>
            </tr>
            <tr>
                <th scope="col">Nombre Producto</th>
                <td>{{$inventarios->NombreProducto}}</td>
            </tr>
            <tr>
                <th scope="col">Cantidad</th>
                <td>{{$inventarios->Cantidad}}</td>
            </tr>
            <tr>
                <th scope="col">Tipo De Factura</th>
                <td>{{$inventarios->TipoDeFactura}}</td>
            </tr>
            <tr>
                <th scope="col">Total Antes De Impuesto</th>
                <td>{{$inventarios->TotalAntes_DeImpuesto}}</td>
            </tr>
            <tr>
                <th scope="col">Impuesto</th>
                <td>{{$inventarios->Impuesto}}</td>
            </tr>
            <tr>
                <th scope="col">Precio Total</th>
                <td>{{$inventarios->PrecioTotal}}</td>
            </tr>
            <tr>
                <th>
                    <a class="btn btn-primary" href="{{url('/Compras')}}">Salir</a>
                </th>
                <td>
                    
                </td>
            </tr>
    </table>
</div>