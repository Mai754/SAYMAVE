<div class="container">
    <br>
    <h3>{{$Modo}} Proveedor</h3>

    <div class="form-group">
        <label class="control-label" for="NombreDelEncargado">{{'Nombre Del Encargado'}}</label>
        <input class="form-control {{$errors->has('NombreDelEncargado')?'is-invalid':''}}" type="text" name="NombreDelEncargado" id="NombreDelEncargado" 
            value="{{ isset($proveedores->NombreDelEncargado)?$proveedores->NombreDelEncargado:old('NombreDelEncargado')}}">
        {!! $errors->first('NombreDelEncargado', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="ApellidoDelEncargado">{{'Apellido Del Encargado'}}</label>
        <input class="form-control {{$errors->has('ApellidoDelEncargado')?'is-invalid':''}}" type="text" name="ApellidoDelEncargado" id="ApellidoDelEncargado" 
            value="{{ isset($proveedores->ApellidoDelEncargado)?$proveedores->ApellidoDelEncargado:old('ApellidoDelEncargado')}}">
        {!! $errors->first('ApellidoDelEncargado', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="NombreDeLaEmpresa">{{'Nombre De La Empresa'}}</label>
        <input class="form-control {{$errors->has('NombreDeLaEmpresa')?'is-invalid':''}}" type="text" name="NombreDeLaEmpresa" id="NombreDeLaEmpresa" 
            value="{{ isset($proveedores->NombreDeLaEmpresa)?$proveedores->NombreDeLaEmpresa:old('NombreDeLaEmpresa')}}">
        {!! $errors->first('NombreDeLaEmpresa', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="DireccionDeLaEmpresa">{{'Direccion De La Empresa'}}</label>
        <input class="form-control {{$errors->has('DireccionDeLaEmpresa')?'is-invalid':''}}" type="text" name="DireccionDeLaEmpresa" id="DireccionDeLaEmpresa" 
            value="{{ isset($proveedores->DireccionDeLaEmpresa)?$proveedores->DireccionDeLaEmpresa:old('DireccionDeLaEmpresa')}}">
        {!! $errors->first('DireccionDeLaEmpresa', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="NumeroTelefonoEncargado">{{'Numero Telefono Del Encargado'}}</label>
        <input class="form-control {{$errors->has('NumeroTelefonoEncargado')?'is-invalid':''}}" type="number" name="NumeroTelefonoEncargado" id="NumeroTelefonoEncargado" 
            value="{{ isset($proveedores->NumeroTelefonoEncargado)?$proveedores->NumeroTelefonoEncargado:old('NumeroTelefonoEncargado')}}">
        {!! $errors->first('NumeroTelefonoEncargado', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    
    <div class="form-group">
        <label class="control-label" for="NumeroTelefonoEmpresa">{{'Numero Telefono De La Empresa'}}</label>
        <input class="form-control {{$errors->has('NumeroTelefonoEmpresa')?'is-invalid':''}}" type="number" name="NumeroTelefonoEmpresa" id="NumeroTelefonoEmpresa" 
            value="{{ isset($proveedores->NumeroTelefonoEmpresa)?$proveedores->NumeroTelefonoEmpresa:old('NumeroTelefonoEmpresa')}}">
        {!! $errors->first('NumeroTelefonoEmpresa', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    
    <div>
        <input class="btn btn-success" type="submit" value="{{$Modo=='Crear'?'Agregar':'Guardar'}}">
        <a class="btn btn-primary" href="{{url('proveedores')}}">Regresar</a>
    </div>
</div>