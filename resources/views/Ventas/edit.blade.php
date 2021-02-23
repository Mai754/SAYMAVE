@extends('plantilla.madre')

<div class="Container">
    <form action="{{ url('/Ventas/'.$proveedor->id)}}" method="post">
        @csrf
        {{ method_field('PATCH') }}
        @include('Ventas.form',['Modo'=>'Editar'])
    </form>
</div>