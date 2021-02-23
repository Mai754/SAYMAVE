@extends('plantilla.madre')

<div class="Container">
        <br/>
        @if(Session::has('Mensaje')) 
                <div class="alert alert-success alert-dismissible" role="alert">
                        {{Session::get('Mensaje') }}   
                </div>
        @endif
        <br/>
                <a href="{{ url('empleados/create')}}" class="btn btn-success" >Agregar Empleado</a>
        <br/>
        <h1>Empleados</h1>
        <table class="table table-light">
                <thead class="thead-light"> 
                        <tr>
                                <ths cope="col">Identidad del Empleado</th>
                                <ths cope="col">Primer Nombre</th>
                                <th scope="col">Primer Apellido</th>
                                <th scope="col">Fecha De Nacimiento</th>
                                <th scope="col">Puesto Empleado</th>
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
                                                                <a href="{{ url('/empleados/'.$empleado->id.'/edit')}}" class="btn btn-warning">Editar</a>      
                                                        </td>
                                                        <td>    
                                                                <form  action="{{ url('/empleados/'.$empleado->id)}}" class="d-inline" method="post" style="display: inline">  
                                                                        @csrf
                                                                        {{ method_field('DELETE')}}
                                                                        <button class="btn btn-danger" type="submit" onclick="return confirm('Desea Borrar');">Borrar</button>                    
                                                                </form>                                  
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

</div>
