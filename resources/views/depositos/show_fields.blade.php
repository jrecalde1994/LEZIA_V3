<!-- Idsucursal Field -->
<div class="col-sm-12">
    {!! Form::label('idSucursal', 'Idsucursal:') !!}
    <p>{{ $deposito->idSucursal }}</p>
</div>

<!-- Nombre Deposito Field -->
<div class="col-sm-12">
    {!! Form::label('nombre_deposito', 'Nombre Deposito:') !!}
    <p>{{ $deposito->nombre_deposito }}</p>
</div>

<!-- Usuario Act Field -->
<div class="col-sm-12">
    {!! Form::label('usuario_act', 'Usuario Act:') !!}
    <p>{{ $deposito->usuario_act }}</p>
</div>

<!-- Fecha Act Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_act', 'Fecha Act:') !!}
    <p>{{ $deposito->fecha_act }}</p>
</div>

