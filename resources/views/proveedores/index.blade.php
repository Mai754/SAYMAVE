@extends('plantilla.madre')

<div class="Container">
   <br>
   @if(Session::has('Mensaje')) 
      <div class="alert alert-success alert-dismissible" role="alert">
         {{Session::get('Mensaje') }} 
      </div>
   @endif
   <br/>
      <a href="{{ url('proveedores/create')}}" class="btn btn-success" >Agregar Proveedor</a>
   <br/>
   <h1>Proveedores</h1>
   <table class="table table-hover" >
      <thead class="thead-dark">
      <tr>
         <th scope="col">Nombre del Encargado</th>
         <th scope="col">Nombre de la Empresa</th>
         <th scope="col">Numero de Telefono del Encargado</th>
         <th scope="col"> </th>
         <th scope="col"> </th>
         <th scope="col"> </th>
      </tr>
      </thead>
      <tbody>
         @forelse($proveedores as $proveedor)
         <tr>
            <td>{{ $proveedor->NombreDelEncargado}}</td>
            <td>{{ $proveedor->NombreDeLaEmpresa}}</td>
            <td>{{ $proveedor->NumeroTelefonoEncargado}}</td>                          
            <td>
               <a class="btn btn-primary"  href="{{url('/proveedores/'.$proveedor->id)}}">Ver</a>      
            </td>      
            <td>
               <form  action="{{ url('/proveedores/'.$proveedor->id)}}" class="d-inline" method="post" style="display: inline">  
                  @csrf
                  {{ method_field('DELETE')}}
                  <button class="btn btn-danger" type="submit" onclick="return confirm('Desea Borrar');">Borrar</button>                    
               </form>
            </td>
            <td>
               <a class="btn btn-warning" href="{{url('/proveedores/'.$proveedor->id.'/edit')}}">Editar</a>
            </td>
         </tr>
         @empty
            <tr>
               <td colspan="4">No hay Proveedores</td>
             </tr>
         @endforelse
      </tbody>
   </table>
   {!! $proveedores->links() !!}
</div>
