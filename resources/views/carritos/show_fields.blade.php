<!-- Idventa Field -->
<div class="col-sm-12">
    {!! Form::label('idVenta', 'Idventa:') !!}
    <p>{{ $carrito->idVenta }}</p>
</div>

<!-- Idproducto Field -->
<div class="col-sm-12">
    {!! Form::label('idProducto', 'Idproducto:') !!}
    <p>{{ $carrito->idProducto }}</p>
</div>

<!-- Cantidad Field -->
<div class="col-sm-12">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{{ $carrito->cantidad }}</p>
</div>

<!-- Precio Venta Field -->
<div class="col-sm-12">
    {!! Form::label('precio_venta', 'Precio Venta:') !!}
    <p>{{ $carrito->precio_venta }}</p>
</div>

<!-- Usuario Act Field -->
<div class="col-sm-12">
    {!! Form::label('usuario_act', 'Usuario Act:') !!}
    <p>{{ $carrito->usuario_act }}</p>
</div>

<!-- Fecha Act Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_act', 'Fecha Act:') !!}
    <p>{{ $carrito->fecha_act }}</p>
</div>

