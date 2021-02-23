<div class="container">

    <div class="form-group">
        <label class="control-label" for="nombre_cliente">{{'Nombre De Cliente'}}</label>
        <input class="form-control {{$errors->has('nombre_cliente')?'is-invalid':''}}" type="text" name="nombre_cliente" id="nombre_cliente" 
            value="{{ isset($clientes->nombre_cliente)?$clientes->nombre_cliente:old('nombre_cliente')}}">
        {!! $errors->first('nombre_cliente', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="apellido_cliente">{{'Apellido De Cliente'}}</label>
        <input class="form-control {{$errors->has('apellido_cliente')?'is-invalid':''}}" type="text" name="apellido_cliente" id="apellido_cliente" 
            value="{{ isset($clientes->apellido_cliente)?$clientes->apellido_cliente:old('apellido_cliente')}}">
        {!! $errors->first('apellido_cliente', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="numero_de_telefono">{{'Numero De Telefono'}}</label>
        <input class="form-control {{$errors->has('numero_de_telefono')?'is-invalid':''}}" type="number" name="numero_de_telefono" id="numero_de_telefono" 
            value="{{ isset($clientes->numero_de_telefono)?$clientes->numero_de_telefono:old('numero_de_telefono')}}">
        {!! $errors->first('numero_de_telefono', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success" value="{{$Modo=='crear'?'Agregar':'Guardar'}}">
        <a class="btn btn-primary" href="{{url('clientes')}}">Cancelar</a>
    </div>
</div>
