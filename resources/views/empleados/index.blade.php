@extends('plantilla.madre')

<div class="Container">
        <br/>
        @if(Session::has('Mensaje')) 
                <div class="alert alert-success alert-dismissible" role="alert">
                        {{Session::get('Mensaje') }}   
                </div>
        @endif
        
        <br>
                <a href="{{url('inventarios')}}" class="btn btn-success" >Inventarios</a>
                <a href="{{url('clientes')}}" class="btn btn-success" >Clientes</a>
                <a href="{{url('proveedores')}}" class="btn btn-success" >Proveedores</a>
        <br>
        <h1>Empleados</h1>
        <table class="table table-hover" >
                <thead class="thead-dark">
                        <tr>
                                <th scope="col">Identidad del Empleado</th>
                                <th scope="col">Primer Nombre</th>
                                <th scope="col">Primer Apellido</th>
                                <th scope="col">Fecha De Nacimiento</th>
                                <th scope="col">Puesto Empleado</th>
                                <th scope="col"> </th>
                                <th scope="col"> </th>
                                <th scope="col"> </th>
                        </tr>
                        </thead>
                                <tbody>
                                        @forelse($empleados as $empleado)
                                                <tr>
                                                        <td>{{ $empleado->DNIEmpleado}}</td>
                                                        <td>{{ $empleado->PrimerNombre}}</td>
                                                        <td>{{ $empleado->PrimerApellido}}</td>
                                                        <td>{{ $empleado->FechaDeNacimiento}}</td>
                                                        <td>{{ $empleado->PuestoEmpleado}}</td>
                                                        <td>
                                                        <a class="btn btn-primary" href="{{url('/empleados/'.$empleado->id)}}">Ver</a>
                                                        </td>
                                                        <td>
                                                        <a href="{{ url('/empleados/'.$empleado->id.'/edit')}}" class="btn btn-warning">Editar</a>      
                                                        </td>
                                                </tr>
                                        @empty
                                                <tr>
                                                   <td colspan="4">No hay Empleado</td>
                                                </tr>
                                        @endforelse
                                </tbody>
        </table>
        {!! $empleados->links() !!}
        <br/>
                <a href="{{ url('empleados/create')}}" class="btn btn-info" >Agregar Empleado</a>
        <br/>   
</div>
