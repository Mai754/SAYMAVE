@extends('plantilla.madre')

<div class="Container">
    <form action="{{ url('/Compras/'.$proveedor->id)}}" method="post">
        @csrf
        {{ method_field('PATCH') }}
        @include('Compras.form',['Modo'=>'Editar'])
    </form>
</div>