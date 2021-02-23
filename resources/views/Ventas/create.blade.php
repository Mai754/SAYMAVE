@extends('plantilla.madre')

<div class="Container">
    <form action="{{ url('Ventas')}}" method="post">
        @csrf
        @include('Ventas.form',['Modo'=>'Crear'])
    </form>
</div>