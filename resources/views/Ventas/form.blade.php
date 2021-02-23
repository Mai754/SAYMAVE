<div class="container">
    <br>
    <h3>{{$Modo}} Factura</h3>

    <div class="form-group">
        <label class="control-label" for="codigoDeFactura">{{'Codigo'}}</label>
        <input class="form-control {{$errors->has('codigoDeFactura')?'is-invalid':''}}" type="text" name="codigoDeFactura" id="codigoDeFactura" 
            value="{{ isset($Venta->codigoDeFactura)?$Venta->codigoDeFactura:old('codigoDeFactura')}}">
        {!! $errors->first('codigoDeFactura', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="DNIEmpleado">{{'DNI Empleado'}}</label>
        <input class="form-control {{$errors->has('DNIEmpleado')?'is-invalid':''}}" type="number" name="DNIEmpleado" id="DNIEmpleado" 
            value="{{ isset($Venta->DNIEmpleado)?$Venta->DNIEmpleado:old('DNIEmpleado')}}">
        {!! $errors->first('DNIEmpleado', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="id_cliente">{{'id cliente'}}</label>
        <input class="form-control {{$errors->has('id_cliente')?'is-invalid':''}}" type="number" name="id_cliente" id="id_cliente" 
            value="{{ isset($Venta->id_cliente)?$Venta->id_cliente:old('id_cliente')}}">
        {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="CodigoDeProducto">{{'Codigo De Producto'}}</label>
        <input class="form-control {{$errors->has('CodigoDeProducto')?'is-invalid':''}}" type="text" name="CodigoDeProducto" id="CodigoDeProducto" 
            value="{{ isset($Venta->CodigoDeProducto)?$Venta->CodigoDeProducto:old('CodigoDeProducto')}}">
        {!! $errors->first('CodigoDeProducto', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="NombreProducto">{{'Nombre De Producto'}}</label>
        <input class="form-control {{$errors->has('NombreProducto')?'is-invalid':''}}" type="text" name="NombreProducto" id="NombreProducto" 
            value="{{ isset($Venta->NombreProducto)?$Venta->NombreProducto:old('NombreProducto')}}">
        {!! $errors->first('NombreProducto', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="Cantidad">{{'Cantidad'}}</label>
        <input class="form-control {{$errors->has('Cantidad')?'is-invalid':''}}" type="number" name="Cantidad" id="Cantidad" 
            value="{{ isset($Venta->Cantidad)?$Venta->Cantidad:old('Cantidad')}}">
        {!! $errors->first('Cantidad', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="TipoDeFactura">{{'Tipo De Factura'}}</label>
        <input class="form-control {{$errors->has('TipoDeFactura')?'is-invalid':''}}" type="text" name="TipoDeFactura" id="TipoDeFactura" 
            value="{{ isset($Venta->TipoDeFactura)?$Venta->TipoDeFactura:old('TipoDeFactura')}}">
        {!! $errors->first('TipoDeFactura', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="TotalAntes_DeImpuesto">{{'Total Antes De Impuesto'}}</label>
        <input class="form-control {{$errors->has('TotalAntes_DeImpuesto')?'is-invalid':''}}" type="number" name="TotalAntes_DeImpuesto" id="TotalAntes_DeImpuesto" 
            value="{{ isset($Venta->TotalAntes_DeImpuesto)?$Venta->TotalAntes_DeImpuesto:old('TotalAntes_DeImpuesto')}}">
        {!! $errors->first('TotalAntes_DeImpuesto', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="Impuesto">{{'Impuesto'}}</label>
        <input class="form-control {{$errors->has('Impuesto')?'is-invalid':''}}" type="number" name="Impuesto" id="Impuesto" 
            value="{{ isset($Venta->Impuesto)?$Venta->Impuesto:old('Impuesto')}}">
        {!! $errors->first('Impuesto', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="PrecioTotal">{{'Precio Total'}}</label>
        <input class="form-control {{$errors->has('PrecioTotal')?'is-invalid':''}}" type="number" name="PrecioTotal" id="PrecioTotal" 
            value="{{ isset($Venta->PrecioTotal)?$Venta->PrecioTotal:old('PrecioTotal')}}">
        {!! $errors->first('PrecioTotal', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success" value="{{$Modo=='Crear'?'Agregar':'Guardar'}}">
        <a class="btn btn-primary" href="{{url('Ventas')}}">Regresar</a>
    </div>
</div>