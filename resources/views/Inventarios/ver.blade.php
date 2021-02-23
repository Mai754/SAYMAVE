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
                <th scope="col">Codigo De Producto</th>
                <td>{{$inventarios->codigo_producto}}</td>
            </tr>
            <tr>
                <th scope="col">Nombre De Producto</th>
                <td>{{$inventarios->Nombre_del_producto}}</td>
            </tr>
            <tr>
                <th scope="col">Descripcion</th>
                <td>{{$inventarios->descripcion_del_producto}}</td>
            </tr>
            <tr>
                <th scope="col">Precio Mayorista</th>
                <td>{{$inventarios->precio_mayorista}}</td>
            </tr>
            <tr>
                <th scope="col">Precio De Compra</th>
                <td>{{$inventarios->precio_compra}}</td>
            </tr>
            <tr>
                <th scope="col">Precio De Venta</th>
                <td>{{$inventarios->precio_venta}}</td>
            </tr>
            <tr>
                <th scope="col">Nombre De La Marca</th>
                <td>{{$inventarios->marcar_del_producto}}</td>
            </tr>
            <tr>
                <th>
                    <a class="btn btn-primary" href="{{url('/inventarios')}}">Salir</a>
                </th>
                <td>
                    
                </td>
            </tr>
    </table>
</div>