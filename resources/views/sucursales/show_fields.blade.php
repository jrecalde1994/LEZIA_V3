<!-- Nombre Sucursal Field -->
<div class="col-sm-12">
    {!! Form::label('nombre_sucursal', 'Nombre Sucursal:') !!}
    <p>{{ $sucursale->nombre_sucursal }}</p>
</div>

<!-- Factura Sucursal Field -->
<div class="col-sm-12">
    {!! Form::label('factura_sucursal', 'Factura Sucursal:') !!}
    <p>{{ $sucursale->factura_sucursal }}</p>
</div>

<!-- Usuario Act Field -->
<div class="col-sm-12">
    {!! Form::label('usuario_act', 'Usuario Act:') !!}
    <p>{{ $sucursale->usuario_act }}</p>
</div>

<!-- Fecha Act Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_act', 'Fecha Act:') !!}
    <p>{{ $sucursale->fecha_act }}</p>
</div>

