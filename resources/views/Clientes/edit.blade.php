@extends('plantilla.madre')

<div class="container">
    <form action="{{url('/clientes/'.$cliente->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        @include('clientes.form',['Modo'=>'Editar'])
    </form>
</div>