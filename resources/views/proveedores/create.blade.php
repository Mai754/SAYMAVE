@extends('plantilla.madre')

<div class="Container">
    <form action="{{ url('proveedores')}}" method="post">
        @csrf
        @include('proveedores.form',['Modo'=>'Crear'])
    </form>
</div>

