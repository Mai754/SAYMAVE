@extends('plantilla.madre')

<div class="container">
    <br>
    @if(Session::has('Mensaje'))
        <div class="alert alert-primary" role="alert">
            
            {{Session::get('Mensaje')}}
        </div>
    @endif
    
    <br>
        <a href="{{url('inventarios')}}" class="btn btn-success" >Inventarios</a>
        <a href="{{url('empleados')}}" class="btn btn-success" >Empleados</a>
        <a href="{{url('proveedores')}}" class="btn btn-success" >Proveedores</a>
    <br>
    <h1>Clientes</h1>
    <table class="table table-hover" >
        <thead class="thead-dark">
        <tr>
            <th scope="col">id Cliente</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col"> </th>
            <th scope="col"> </th>
        </tr>
        </thead>
        <tbody>
            @forelse ($clientes as $cliente)
                <tr>
                    <td>{{$cliente->id}}</td>
                    <td>{{$cliente->nombre_cliente}}</td>
                    <td>{{$cliente->apellido_cliente}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{url('/clientes/'.$cliente->id)}}">Ver</a>
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{url('/clientes/'.$cliente->id.'/edit')}}">Editar</a>
                    </td>
                </tr> 
            @empty
                <tr>
                    <td colspan="4">No hay Productos</td>
                </tr>
            @endforelse  
        </tbody>
    </table>
    {{$clientes->links()}}
    <br>
        <a href="{{url('clientes/create')}}" class="btn btn-info" >Nuevo Cliente</a>
    <br>
</div>