@extends('plantilla.madre')

<div class="Container">
    <form action="{{ url('Compras')}}" method="post">
        @csrf
        @include('Compras.form',['Modo'=>'Crear'])
    </form>
</div>
