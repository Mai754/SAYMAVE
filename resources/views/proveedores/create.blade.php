@extends('plantilla.madre')

<div class="Container">
    <form action="{{ url('/proveedores')}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('proveedores.form',['Modo'=>'crear'])
    </form>
</div>

