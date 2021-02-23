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
                <th scope="col">DNI Empleado</th>
                <td>{{$empleados->DNIEmpleado}}</td>
                
            </tr>
            <tr>
                <th scope="col">Primer Nombre</th>
                <td>{{$empleados->PrimerNombre}}</td>
            </tr>
            <tr>
                <th scope="col">Primer Apellido</th>
                <td>{{$empleados->PrimerApellido}}</td>
            </tr>
            <tr>
                <th scope="col">Direccion De Empleado</th>
                <td>{{$empleados->DireccionEmpleado}}</td>
            </tr>
            <tr>
                <th scope="col">Telefono De Empleado</th>
                <td>{{$empleados->TelefonoEmpleado}}</td>
            </tr>
            <tr>
                <th scope="col">Puesto De Empleado</th>
                <td>{{$empleados->PuestoEmpleado}}</td>
            </tr>
            <tr>
                <th scope="col">Contacto De Emergencia</th>
                <td>{{$empleados->ContactoDeEmergencia}}</td>
            </tr>
            <tr>
                <th>
                    <a class="btn btn-primary" href="{{url('/empleados')}}">Salir</a>
                </th>
                <td>
                    
                </td>
            </tr>
    </table>
</div>