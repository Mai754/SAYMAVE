@extends('plantilla.madre')

<div class="Container">
    <form action="{{url('/empleados/'.$empleado->id)}}" method="post">
        @csrf
        {{method_field('PUT') }}
        @include('empleados.form',['Modo'=>'editar'])
    </form>
</div>





