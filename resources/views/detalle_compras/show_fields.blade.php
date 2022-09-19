<!-- Idcompra Field -->
<div class="col-sm-12">
    {!! Form::label('idCompra', 'Idcompra:') !!}
    <p>{{ $detalleCompra->idCompra }}</p>
</div>

<!-- Idproducto Field -->
<div class="col-sm-12">
    {!! Form::label('idProducto', 'Idproducto:') !!}
    <p>{{ $detalleCompra->idProducto }}</p>
</div>

<!-- Cantidad Field -->
<div class="col-sm-12">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{{ $detalleCompra->cantidad }}</p>
</div>

<!-- Precio Compra Field -->
<div class="col-sm-12">
    {!! Form::label('precio_compra', 'Precio Compra:') !!}
    <p>{{ $detalleCompra->precio_compra }}</p>
</div>

<!-- Usuario Act Field -->
<div class="col-sm-12">
    {!! Form::label('usuario_act', 'Usuario Act:') !!}
    <p>{{ $detalleCompra->usuario_act }}</p>
</div>

<!-- Fecha Act Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_act', 'Fecha Act:') !!}
    <p>{{ $detalleCompra->fecha_act }}</p>
</div>

