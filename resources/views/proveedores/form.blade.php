<div class="container">
    <br>
    <h3>{{$Modo}} Proveedor</h3>

    <div class="form-group">
        <label class="control-label" for="nombre_encargado">{{'Nombre Del Encargado'}}</label>
        <input class="form-control {{$errors->has('nombre_encargado')?'is-invalid':''}}" type="text" name="nombre_encargado" id="nombre_encargado" 
            value="{{ isset($proveedor->nombre_encargado)?$proveedor->nombre_encargado:old('nombre_encargado')}}">
        {!! $errors->first('nombre_encargado', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="apellido_encargado">{{'Apellido Del Encargado'}}</label>
        <input class="form-control {{$errors->has('apellido_encargado')?'is-invalid':''}}" type="text" name="apellido_encargado" id="apellido_encargado" 
            value="{{ isset($proveedor->apellido_encargado)?$proveedor->apellido_encargado:old('apellido_encargado')}}">
        {!! $errors->first('apellido_encargado', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="nombre_empresa">{{'Nombre De La Empresa'}}</label>
        <input class="form-control {{$errors->has('nombre_empresa')?'is-invalid':''}}" type="text" name="nombre_empresa" id="nombre_empresa" 
            value="{{ isset($proveedor->nombre_empresa)?$proveedor->nombre_empresa:old('nombre_empresa')}}">
        {!! $errors->first('nombre_empresa', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="dirección_empresa">{{'Direccion De La Empresa'}}</label>
        <input class="form-control {{$errors->has('dirección_empresa')?'is-invalid':''}}" type="text" name="dirección_empresa" id="dirección_empresa" 
            value="{{ isset($proveedor->dirección_empresa)?$proveedor->dirección_empresa:old('dirección_empresa')}}">
        {!! $errors->first('dirección_empresa', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="numero_encargado">{{'Numero Telefono Del Encargado'}}</label>
        <input class="form-control {{$errors->has('numero_encargado')?'is-invalid':''}}" type="number" name="numero_encargado" id="numero_encargado" 
            value="{{ isset($proveedor->numero_encargado)?$proveedor->numero_encargado:old('numero_encargado')}}">
        {!! $errors->first('numero_encargado', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    
    <div class="form-group">
        <label class="control-label" for="numero_empresa">{{'Numero Telefono De La Empresa'}}</label>
        <input class="form-control {{$errors->has('numero_empresa')?'is-invalid':''}}" type="number" name="numero_empresa" id="numero_empresa" 
            value="{{ isset($proveedor->numero_empresa)?$proveedor->numero_empresa:old('numero_empresa')}}">
        {!! $errors->first('numero_empresa', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success" value="{{$Modo=='Crear'?'Agregar':'Guardar'}}">
        <a class="btn btn-primary" href="{{url('proveedores')}}">Regresar</a>
    </div>
</div>