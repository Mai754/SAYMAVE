@extends('plantilla.madre')

<div class="Container">
    <form action="{{ url('/empleados')}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('empleados.form',['Modo'=>'crear'])
    </form>
</div>