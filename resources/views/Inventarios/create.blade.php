@extends('plantilla.madre')

<div class="container">
    <form action="{{url('/inventarios')}}" method="post">
        @csrf
        @include('inventarios.form',['Modo'=>'Crear'])
    </form>
</div>