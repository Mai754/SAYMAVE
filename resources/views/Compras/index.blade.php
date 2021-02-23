@extends('plantilla.madre')

<div class="Container">
   <br>
   @if(Session::has('Mensaje')) 
      <div class="alert alert-success alert-dismissible" role="alert">
         {{Session::get('Mensaje') }} 
      </div>
   @endif
   <br>
      <a href="{{url('clientes')}}" class="btn btn-success" >Clientes</a>
      <a href="{{url('empleados')}}" class="btn btn-success" >Empleados</a>
      <a href="{{url('inventarios')}}" class="btn btn-success" >Inventarios</a>
   <br>
   <h1>Facturas De Compras</h1>
   <table class="table table-hover" >
      <thead class="thead-dark">
      <tr>
         <th scope="col">Fecha</th>
         <th scope="col">Codigo</th>
         <th scope="col">Empresa</th>
         <th scope="col">Producto</th>
         <th scope="col"> </th>
         <th scope="col"> </th>
      </tr>
      </thead>
      <tbody>
         @forelse($Compras as $Compra)
         <tr>
            <td>{{ $Compra->FechaDeLaCompra}}</td>
            <td>{{ $Compra->codigoDeFactura}}</td>
            <td>{{ $Compra->NombreEmpresa}}</td>
            <td>{{ $Compra->NombreProducto}}</td>                          
            <td>
               <a class="btn btn-primary"  href="{{url('/Compras/'.$Compra->id)}}">Ver</a>      
            </td>
            <td>
               <a class="btn btn-warning" href="{{url('/Compras/'.$Compra->id.'/edit')}}">Editar</a>
            </td>
         </tr>
         @empty
            <tr>
               <td colspan="4">No hay Compras</td>
             </tr>
         @endforelse
      </tbody>
   </table>
   {!! $Compras->links() !!}
   <br/>
      <a href="{{ url('Compras/create')}}" class="btn btn-info" >Agregar Proveedor</a>
   <br/>
</div>