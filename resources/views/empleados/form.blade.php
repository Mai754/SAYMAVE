<div class="container">
    <br>
    <h3>{{$Modo}} Empleado</h3>
    <div class="form-group">
        <label class="control-label" for="DNIEmpleado">{{'Identidad De Empleado'}}</label>
        <input class="form-control {{$errors->has('DNIEmpleado')?'is-invalid':''}}" type="number" name="DNIEmpleado" id="DNIEmpleado" 
            value="{{ isset($empleado->DNIEmpleado)?$empleado->DNIEmpleado:old('DNIEmpleado')}}">
        {!! $errors->first('DNIEmpleado', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="PrimerNombre">{{'Primer Nombre'}}</label>
        <input class="form-control {{$errors->has('PrimerNombre')?'is-invalid':''}}" type="text" name="PrimerNombre" id="PrimerNombre" 
            value="{{ isset($empleado->PrimerNombre)?$empleado->PrimerNombre:old('PrimerNombre')}}">
        {!! $errors->first('PrimerNombre', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="SegundoNombre">{{'Segundo Nombre'}}</label>
        <input class="form-control {{$errors->has('SegundoNombre')?'is-invalid':''}}" type="text" name="SegundoNombre" id="SegundoNombre" 
            value="{{ isset($empleado->SegundoNombre)?$empleado->SegundoNombre:old('SegundoNombre')}}">
        {!! $errors->first('SegundoNombre', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    
    <div class="form-group">
        <label class="control-label" for="PrimerApellido">{{'Primer Apellido'}}</label>
        <input class="form-control {{$errors->has('PrimerApellido')?'is-invalid':''}}" type="text" name="PrimerApellido" id="PrimerApellido" 
            value="{{ isset($empleado->PrimerApellido)?$empleado->PrimerApellido:old('PrimerApellido')}}">
        {!! $errors->first('PrimerApellido', '<div class="invalid-feedback">:message</div>') !!}
    </div>
            
    <div class="form-group">
        <label class="control-label" for="SegundoApellido">{{'Segundo Apellido'}}</label>
        <input class="form-control {{$errors->has('SegundoApellido')?'is-invalid':''}}" type="text" name="SegundoApellido" id="SegundoApellido" 
            value="{{ isset($empleado->SegundoApellido)?$empleado->SegundoApellido:old('SegundoApellido')}}">
        {!! $errors->first('SegundoApellido', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    
    <div class="form-group">
        <label class="control-label" for="DireccionEmpleado">{{'Direccion Empleado'}}</label>
        <input class="form-control {{$errors->has('DireccionEmpleado')?'is-invalid':''}}" type="text" name="DireccionEmpleado" id="DireccionEmpleado" 
            value="{{ isset($empleado->DireccionEmpleado)?$empleado->DireccionEmpleado:old('DireccionEmpleado')}}">
        {!! $errors->first('DireccionEmpleado', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="FechaDeNacimiento">{{'Fecha De Nacimiento'}}</label>
        <input class="form-control {{$errors->has('FechaDeNacimiento')?'is-invalid':''}}" type="date" name="FechaDeNacimiento" id="FechaDeNacimiento" 
            value="{{ isset($empleado->FechaDeNacimiento)?$empleado->FechaDeNacimiento:old('FechaDeNacimiento')}}">
        {!! $errors->first('FechaDeNacimiento', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    
    <div class="form-group">
        <label class="control-label" for="TelefonoEmpleado">{{'Telefono De Empleado'}}</label>
        <input class="form-control {{$errors->has('TelefonoEmpleado')?'is-invalid':''}}" type="number" name="TelefonoEmpleado" id="TelefonoEmpleado" 
            value="{{ isset($empleado->TelefonoEmpleado)?$empleado->TelefonoEmpleado:old('TelefonoEmpleado')}}">
        {!! $errors->first('TelefonoEmpleado', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    
    <div class="form-group">
        <label class="control-label" for="PuestoEmpleado">{{'Puesto'}}</label>
        <input class="form-control {{$errors->has('PuestoEmpleado')?'is-invalid':''}}" type="text" name="PuestoEmpleado" id="PuestoEmpleado" 
            value="{{ isset($empleado->PuestoEmpleado)?$empleado->PuestoEmpleado:old('PuestoEmpleado')}}">
        {!! $errors->first('PuestoEmpleado', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    
    <div class="form-group">
        <label class="control-label" for="ContactoDeEmergencia">{{'Contacto De Emergencia'}}</label>
        <input class="form-control {{$errors->has('ContactoDeEmergencia')?'is-invalid':''}}" type="number" name="ContactoDeEmergencia" id="ContactoDeEmergencia" 
            value="{{ isset($empleado->ContactoDeEmergencia)?$empleado->ContactoDeEmergencia:old('ContactoDeEmergencia')}}">
        {!! $errors->first('ContactoDeEmergencia', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label for="FotoDeEmpleado">{{'Foto De Empleado'}}</label>
    </div>

    <div class="form-group">
        @if(isset($empleado->FotoDeEmpleado))
            <img class="img-thumbnail img-fluid" src=" {{ asset('storage').'/'. 
            $empleado->FotoDeEmpleado}}" alt="" width="100">
        @endif
        <input type="file" name="FotoDeEmpleado" id="FotoDeEmpleado" value="">
    </div>
    
    <div>
        <input class="btn btn-success" type="submit" value="{{$Modo=='Crear'?'Agregar':'Guardar'}}">
        <a class="btn btn-primary" href="{{ url('empleados')}}">Regresar</a>
    </div>
</div>