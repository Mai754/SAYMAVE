@extends('plantilla.madre')

<div class="container">
    <form action="{{url('/inventarios/'.$inventario->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        @include('inventarios.form',['Modo'=>'editar'])
    </form>
</div>