@extends('plantilla.madre')

<div class="container">
    <br>
    @if(Session::has('Mensaje'))
        <div class="alert alert-primary" role="alert">
            
            {{Session::get('Mensaje')}}
        </div>
    @endif
    <br>
        <a href="{{url('clientes/create')}}" class="btn btn-success" >Nuevo Cliente</a>
        <a href="{{url('inventarios')}}" class="btn btn-success" >Inventario</a>
    <br>
    <h1>Clientes</h1>
    <table class="table table-hover" >
        <thead class="thead-dark">
        <tr>
            <th scope="col">Nombre Del Cliente</th>
            <th scope="col">id Cliente</th>
            <th scope="col"> </th>
            <th scope="col"> </th>
            <th scope="col"> </th>
        </tr>
        </thead>
        <tbody>
            @forelse ($clientes as $cliente)
                <tr>
                    <td>{{$cliente->nombre_cliente}}</td>
                    <td>{{$cliente->id}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{url('/clientes/'.$cliente->id)}}">Ver</a>
                    </td>
                    <td>
                        <form action="{{url('/clientes/'.$cliente->id)}}" method="post" style="display: inline">
                            @csrf
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
                        </form>
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
</div>