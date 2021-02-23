@extends('plantilla.madre')

<div class="container">
    <form action="{{url('/clientes')}}" method="post">
        @csrf
        @include('clientes.form',['Modo'=>'Crear'])
    </form>
</div>