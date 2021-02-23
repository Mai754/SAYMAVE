<div class="container">
    <br>
    <h3>{{$Modo}} Factura</h3>

    <div class="form-group">
        <label class="control-label" for="codigoDeFactura">{{'Codigo'}}</label>
        <input class="form-control {{$errors->has('codigoDeFactura')?'is-invalid':''}}" type="text" name="codigoDeFactura" id="codigoDeFactura" 
            value="{{ isset($Compra->codigoDeFactura)?$Compra->codigoDeFactura:old('codigoDeFactura')}}">
        {!! $errors->first('codigoDeFactura', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="DNIEmpleado">{{'DNI Empleado'}}</label>
        <input class="form-control {{$errors->has('DNIEmpleado')?'is-invalid':''}}" type="number" name="DNIEmpleado" id="DNIEmpleado" 
            value="{{ isset($Compra->DNIEmpleado)?$Compra->DNIEmpleado:old('DNIEmpleado')}}">
        {!! $errors->first('DNIEmpleado', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="IdProveedor">{{'Id Proveedor'}}</label>
        <input class="form-control {{$errors->has('IdProveedor')?'is-invalid':''}}" type="number" name="IdProveedor" id="IdProveedor" 
            value="{{ isset($Compra->IdProveedor)?$Compra->IdProveedor:old('IdProveedor')}}">
        {!! $errors->first('IdProveedor', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="NombreEmpresa">{{'Nombre De La Empresa'}}</label>
        <input class="form-control {{$errors->has('NombreEmpresa')?'is-invalid':''}}" type="text" name="NombreEmpresa" id="NombreEmpresa" 
            value="{{ isset($Compra->NombreEmpresa)?$Compra->NombreEmpresa:old('NombreEmpresa')}}">
        {!! $errors->first('NombreEmpresa', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="CodigoDeProducto">{{'Codigo De Producto'}}</label>
        <input class="form-control {{$errors->has('CodigoDeProducto')?'is-invalid':''}}" type="text" name="CodigoDeProducto" id="CodigoDeProducto" 
            value="{{ isset($Compra->CodigoDeProducto)?$Compra->CodigoDeProducto:old('CodigoDeProducto')}}">
        {!! $errors->first('CodigoDeProducto', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="NombreProducto">{{'Nombre De Producto'}}</label>
        <input class="form-control {{$errors->has('NombreProducto')?'is-invalid':''}}" type="text" name="NombreProducto" id="NombreProducto" 
            value="{{ isset($Compra->NombreProducto)?$Compra->NombreProducto:old('NombreProducto')}}">
        {!! $errors->first('NombreProducto', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="Cantidad">{{'Cantidad'}}</label>
        <input class="form-control {{$errors->has('Cantidad')?'is-invalid':''}}" type="number" name="Cantidad" id="Cantidad" 
            value="{{ isset($Compra->Cantidad)?$Compra->Cantidad:old('Cantidad')}}">
        {!! $errors->first('Cantidad', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="TipoDeFactura">{{'Tipo De Factura'}}</label>
        <input class="form-control {{$errors->has('TipoDeFactura')?'is-invalid':''}}" type="text" name="TipoDeFactura" id="TipoDeFactura" 
            value="{{ isset($Compra->TipoDeFactura)?$Compra->TipoDeFactura:old('TipoDeFactura')}}">
        {!! $errors->first('TipoDeFactura', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="TotalAntes_DeImpuesto">{{'Total Antes De Impuesto'}}</label>
        <input class="form-control {{$errors->has('TotalAntes_DeImpuesto')?'is-invalid':''}}" type="number" name="TotalAntes_DeImpuesto" id="TotalAntes_DeImpuesto" 
            value="{{ isset($Compra->TotalAntes_DeImpuesto)?$Compra->TotalAntes_DeImpuesto:old('TotalAntes_DeImpuesto')}}">
        {!! $errors->first('TotalAntes_DeImpuesto', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="Impuesto">{{'Impuesto'}}</label>
        <input class="form-control {{$errors->has('Impuesto')?'is-invalid':''}}" type="number" name="Impuesto" id="Impuesto" 
            value="{{ isset($Compra->Impuesto)?$Compra->Impuesto:old('Impuesto')}}">
        {!! $errors->first('Impuesto', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="PrecioTotal">{{'Precio Total'}}</label>
        <input class="form-control {{$errors->has('PrecioTotal')?'is-invalid':''}}" type="number" name="PrecioTotal" id="PrecioTotal" 
            value="{{ isset($Compra->PrecioTotal)?$Compra->PrecioTotal:old('PrecioTotal')}}">
        {!! $errors->first('PrecioTotal', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success" value="{{$Modo=='Crear'?'Agregar':'Guardar'}}">
        <a class="btn btn-primary" href="{{url('Compras')}}">Regresar</a>
    </div>
</div>