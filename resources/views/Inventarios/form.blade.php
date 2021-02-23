<div class="container">
    <br>
    <h3>{{$Modo}} Producto</h3>

    <div class="form-group">
        <label class="control-label" for="codigo_producto">{{'Codigo De Producto'}}</label>
        <input class="form-control {{$errors->has('codigo_producto')?'is-invalid':''}}" type="text" name="codigo_producto" id="codigo_producto" 
            value="{{ isset($inventarios->codigo_producto)?$inventarios->codigo_producto:old('codigo_producto')}}">
        {!! $errors->first('codigo_producto', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="Nombre_del_producto">{{'Nombre De Producto'}}</label>
        <input class="form-control {{$errors->has('Nombre_del_producto')?'is-invalid':''}}" type="text" name="Nombre_del_producto" id="Nombre_del_producto" 
            value="{{ isset($inventarios->Nombre_del_producto)?$inventarios->Nombre_del_producto:old('Nombre_del_producto')}}">
        {!! $errors->first('Nombre_del_producto', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    
    <div class="form-group">
        <label class="control-label" for="descripcion_del_producto">{{'Descripcion'}}</label>
        <input class="form-control {{$errors->has('descripcion_del_producto')?'is-invalid':''}}" type="text" name="descripcion_del_producto" id="descripcion_del_producto" 
            value="{{ isset($inventarios->descripcion_del_producto)?$inventarios->descripcion_del_producto:old('descripcion_del_producto')}}">
        {!! $errors->first('descripcion_del_producto', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="precio_mayorista">{{'Precio De Mayorista'}}</label>
        <input class="form-control {{$errors->has('precio_mayorista')?'is-invalid':''}}" type="number" name="precio_mayorista" id="precio_mayorista" 
            value="{{ isset($inventarios->precio_mayorista)?$inventarios->precio_mayorista:old('precio_mayorista')}}">
        {!! $errors->first('precio_mayorista', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="precio_compra">{{'Precio De Compra'}}</label>
        <input class="form-control {{$errors->has('precio_compra')?'is-invalid':''}}" type="number" name="precio_compra" id="precio_compra" 
            value="{{ isset($inventarios->precio_compra)?$inventarios->precio_compra:old('precio_compra')}}">
        {!! $errors->first('precio_compra', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="precio_venta">{{'Precio De Venta'}}</label>
        <input class="form-control {{$errors->has('precio_venta')?'is-invalid':''}}" type="number" name="precio_venta" id="precio_venta" 
            value="{{ isset($inventarios->precio_venta)?$inventarios->precio_venta:old('precio_venta')}}">
        {!! $errors->first('precio_venta', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label class="control-label" for="marcar_del_producto">{{'Nombre De La Marcar'}}</label>
        <input class="form-control {{$errors->has('marcar_del_producto')?'is-invalid':''}}" type="text" name="marcar_del_producto" id="marcar_del_producto" 
            value="{{ isset($inventarios->marcar_del_producto)?$inventarios->marcar_del_producto:old('marcar_del_producto')}}">
        {!! $errors->first('marcar_del_producto', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success" value="{{$Modo=='Crear'?'Agregar':'Guardar'}}">
        <a class="btn btn-primary" href="{{url('inventarios')}}">Regresar</a>
    </div>
</div>