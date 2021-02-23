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
                <th scope="col">Nombre</th>
                <td>{{$proveedores->nombre_encargado}}</td>
            </tr>
            <tr>
                <th scope="col">Apellido</th>
                <td>{{$proveedores->apellido_encargado}}</td>
            </tr>
            <tr>
                <th scope="col">Empresa</th>
                <td>{{$proveedores->nombre_empresa}}</td>
            </tr>
            <tr>
                <th scope="col">Direccion De La Empresa</th>
                <td>{{$proveedores->dirección_empresa}}</td>
            </tr>
            <tr>
                <th scope="col">Numero De Empleado</th>
                <td>{{$proveedores->numero_encargado}}</td>
            </tr>
            <tr>
                <th scope="col">Numero De La Empresa</th>
                <td>{{$proveedores->numero_empresa}}</td>
            </tr>
            <tr>
                <th>
                    <a class="btn btn-primary" href="{{url('/proveedores')}}">Salir</a>
                </th>
                <td>
                    
                </td>
            </tr>
    </table>
</div>