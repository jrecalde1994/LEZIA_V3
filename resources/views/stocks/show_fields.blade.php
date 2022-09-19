<!-- Idproducto Field -->
<div class="col-sm-12">
    {!! Form::label('idProducto', 'Idproducto:') !!}
    <p>{{ $stock->idProducto }}</p>
</div>

<!-- Existencia Actual Field -->
<div class="col-sm-12">
    {!! Form::label('existencia_actual', 'Existencia Actual:') !!}
    <p>{{ $stock->existencia_actual }}</p>
</div>

<!-- Lote Field -->
<div class="col-sm-12">
    {!! Form::label('lote', 'Lote:') !!}
    <p>{{ $stock->lote }}</p>
</div>

<!-- Usuario Act Field -->
<div class="col-sm-12">
    {!! Form::label('usuario_act', 'Usuario Act:') !!}
    <p>{{ $stock->usuario_act }}</p>
</div>

<!-- Fecha Act Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_act', 'Fecha Act:') !!}
    <p>{{ $stock->fecha_act }}</p>
</div>

