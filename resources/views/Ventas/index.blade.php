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
   <h1>Facturas De Ventas</h1>
   <table class="table table-hover" >
      <thead class="thead-dark">
      <tr>
         <th scope="col">Fecha</th>
         <th scope="col">Codigo</th>
         <th scope="col">Producto</th>
         <th scope="col"> </th>
         <th scope="col"> </th>
      </tr>
      </thead>
      <tbody>
         @forelse($Ventas as $Venta)
         <tr>
            <td>{{ $Venta->FechaDeLaCompra}}</td>
            <td>{{ $Venta->codigoDeFactura}}</td>
            <td>{{ $Venta->NombreProducto}}</td>                          
            <td>
               <a class="btn btn-primary"  href="{{url('/Ventas/'.$Venta->id)}}">Ver</a>      
            </td>
            <td>
               <a class="btn btn-warning" href="{{url('/Ventas/'.$Venta->id.'/edit')}}">Editar</a>
            </td>
         </tr>
         @empty
            <tr>
               <td colspan="4">No hay Ventas</td>
             </tr>
         @endforelse
      </tbody>
   </table>
   {!! $Ventas->links() !!}
   <br/>
      <a href="{{ url('Ventas/create')}}" class="btn btn-info" >Agregar Proveedor</a>
   <br/>
</div>