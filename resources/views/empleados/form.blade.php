<div class="container">
    <br>
    <h3>{{$Modo}} Empleado</h3>
    <div class="form-group">
        <label class="control-label" for="DNIEmpleado">{{'DNI Empleado'}}</label>
        <input class="form-control {{$errors->has('DNIEmpleado')?'is-invalid':''}}" type="number" name="DNIEmpleado" id="DNIEmpleado" 
            value="{{ isset($empleados->DNIEmpleado)?$empleados->DNIEmpleado:old('DNIEmpleado')}}">
        {!! $errors->first('DNIEmpleado', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="PrimerNombre">{{'Primer Nombre'}}</label>
        <input class="form-control {{$errors->has('PrimerNombre')?'is-invalid':''}}" type="text" name="PrimerNombre" id="PrimerNombre" 
            value="{{ isset($empleados->PrimerNombre)?$empleados->PrimerNombre:old('PrimerNombre')}}">
        {!! $errors->first('PrimerNombre', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="SegundoNombre">{{'Segundo Nombre'}}</label>
        <input class="form-control {{$errors->has('SegundoNombre')?'is-invalid':''}}" type="text" name="SegundoNombre" id="SegundoNombre" 
            value="{{ isset($empleados->SegundoNombre)?$empleados->SegundoNombre:old('SegundoNombre')}}">
        {!! $errors->first('SegundoNombre', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    
    <div class="form-group">
        <label class="control-label" for="PrimerApellido">{{'Primer Apellido'}}</label>
        <input class="form-control {{$errors->has('PrimerApellido')?'is-invalid':''}}" type="text" name="PrimerApellido" id="PrimerApellido" 
            value="{{ isset($empleados->PrimerApellido)?$empleados->PrimerApellido:old('PrimerApellido')}}">
        {!! $errors->first('PrimerApellido', '<div class="invalid-feedback">:message</div>') !!}
    </div>
            
    <div class="form-group">
        <label class="control-label" for="SegundoApellido">{{'Segundo Apellido'}}</label>
        <input class="form-control {{$errors->has('SegundoApellido')?'is-invalid':''}}" type="text" name="SegundoApellido" id="SegundoApellido" 
            value="{{ isset($empleados->SegundoApellido)?$empleados->SegundoApellido:old('SegundoApellido')}}">
        {!! $errors->first('SegundoApellido', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    
    <div class="form-group">
        <label class="control-label" for="DireccionEmpleado">{{'Direccion Empleado'}}</label>
        <input class="form-control {{$errors->has('DireccionEmpleado')?'is-invalid':''}}" type="text" name="DireccionEmpleado" id="DireccionEmpleado" 
            value="{{ isset($empleados->DireccionEmpleado)?$empleados->DireccionEmpleado:old('DireccionEmpleado')}}">
        {!! $errors->first('DireccionEmpleado', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="FechaDeNacimiento">{{'Fecha De Nacimiento'}}</label>
        <input class="form-control {{$errors->has('FechaDeNacimiento')?'is-invalid':''}}" type="date" name="FechaDeNacimiento" id="FechaDeNacimiento" 
            value="{{ isset($empleados->FechaDeNacimiento)?$empleados->FechaDeNacimiento:old('FechaDeNacimiento')}}">
        {!! $errors->first('FechaDeNacimiento', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    
    <div class="form-group">
        <label class="control-label" for="TelefonoEmpleado">{{'Telefono De Empleado'}}</label>
        <input class="form-control {{$errors->has('TelefonoEmpleado')?'is-invalid':''}}" type="number" name="TelefonoEmpleado" id="TelefonoEmpleado" 
            value="{{ isset($empleados->TelefonoEmpleado)?$empleados->TelefonoEmpleado:old('TelefonoEmpleado')}}">
        {!! $errors->first('TelefonoEmpleado', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    
    <div class="form-group">
        <label class="control-label" for="PuestoEmpleado">{{'Puesto'}}</label>
        <input class="form-control {{$errors->has('PuestoEmpleado')?'is-invalid':''}}" type="text" name="PuestoEmpleado" id="PuestoEmpleado" 
            value="{{ isset($empleados->PuestoEmpleado)?$empleados->PuestoEmpleado:old('PuestoEmpleado')}}">
        {!! $errors->first('PuestoEmpleado', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    
    <div class="form-group">
        <label class="control-label" for="ContactoDeEmergencia">{{'Contacto De Emergencia'}}</label>
        <input class="form-control {{$errors->has('ContactoDeEmergencia')?'is-invalid':''}}" type="number" name="ContactoDeEmergencia" id="ContactoDeEmergencia" 
            value="{{ isset($empleados->ContactoDeEmergencia)?$empleados->ContactoDeEmergencia:old('ContactoDeEmergencia')}}">
        {!! $errors->first('ContactoDeEmergencia', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label for="FotoDeEmpleado">{{'Foto De Emergencia'}}</label>
        @if(isset($empleados->FotoDeEmpleado))
    </div>

    <div class="form-group">
        <img class="img-thumbnail img-fluid" src=" {{ asset('storage').'/'. 
        $empleados->FotoDeEmpleado}}" alt="" width="100">
        @endif
        <input type="file" name="FotoDeEmpleado" id="FotoDeEmpleado" value="">
    </div>
    
    <div>
        <input class="btn btn-success" type="submit" value="{{$Modo=='crear'?'Agregar':'Guardar'}}">
        <a class="btn btn-primary" href="{{ url('empleados')}}">Regresar</a>
    </div>
</div>