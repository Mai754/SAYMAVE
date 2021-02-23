@extends('plantilla.madre')

<div class="Container">
    <form action="{{ url('/proveedores/'.$proveedor->id)}}" method="post">
        @csrf
        {{ method_field('PATCH') }}
        @include('proveedores.form',['Modo'=>'Editar'])
    </form>
</div>
