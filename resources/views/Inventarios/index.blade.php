@extends('plantilla.madre')

<div class="container">
    <br>
    @if(Session::has('Mensaje'))
        <div class="alert alert-primary" role="alert">
            
            {{Session::get('Mensaje')}}
        </div>
    @endif
    <br>
        <a href="{{url('clientes')}}" class="btn btn-success" >Clientes</a>
        <a href="{{url('empleados')}}" class="btn btn-success" >Empleados</a>
        <a href="{{url('proveedores')}}" class="btn btn-success" >Proveedores</a>
    <br>
    <h1>Inventario</h1>
    <table class="table table-hover" >
        <thead class="thead-dark">
        <tr>
            <th scope="col">Nombre Del Producto</th>
            <th scope="col">Codigo Del Producto</th>
            <th scope="col">Precio De Venta</th>
            <th scope="col"> </th>
            <th scope="col"> </th>
            <th scope="col"> </th>
        </tr>
        </thead>
        <tbody>
            @forelse ($inventarios as $inventario)
                <tr>
                    <td>{{$inventario->Nombre_del_producto}}</td>
                    <td>{{$inventario->codigo_producto}}</td>
                    <td>{{$inventario->precio_venta}}</td>
                    <td>
                        <a class="btn btn-primary"  href="{{url('/inventarios/'.$inventario->id)}}">Ver</a>
                    </td>
                    <td>
                        <form action="{{url('/inventarios/'.$inventario->id)}}" method="post" style="display: inline">
                            @csrf
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
                        </form>
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{url('/inventarios/'.$inventario->id.'/edit')}}">Editar</a>
                    </td>
                </tr> 
            @empty
                <tr>
                    <td colspan="4">No hay Productos</td>
                </tr>
            @endforelse  
        </tbody>
    </table>
    {{$inventarios->links()}}
    <br>
        <a href="{{url('inventarios/create')}}" class="btn btn-info" >Nuevo Producto</a>
    <br>
</div>