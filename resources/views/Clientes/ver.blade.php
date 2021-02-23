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
                <th scope="col">Nombre De Cliente</th>
                <td>{{$clientes->nombre_cliente}}</td>
                
            </tr>
            <tr>
                <th scope="col">Apellido De Cliente</th>
                <td>{{$clientes->apellido_cliente}}</td>
            </tr>
            <tr>
                <th scope="col">Numero De Telefono</th>
                <td>{{$clientes->numero_de_telefono}}</td>
            </tr>
            <tr>
                <th>
                    <a class="btn btn-primary" href="{{url('/clientes')}}">Salir</a>
                </th>
                <td>
                    
                </td>
            </tr>
    </table>
</div>