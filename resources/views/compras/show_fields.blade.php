<!-- Idproveedor Field -->
<div class="col-sm-12">
    {!! Form::label('idProveedor', 'Idproveedor:') !!}
    <p>{{ $compra->idProveedor }}</p>
</div>

<!-- Fecha Compra Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_compra', 'Fecha Compra:') !!}
    <p>{{ $compra->fecha_compra }}</p>
</div>

<!-- Numero Factura Field -->
<div class="col-sm-12">
    {!! Form::label('numero_factura', 'Numero Factura:') !!}
    <p>{{ $compra->numero_factura }}</p>
</div>

<!-- Usuario Act Field -->
<div class="col-sm-12">
    {!! Form::label('usuario_act', 'Usuario Act:') !!}
    <p>{{ $compra->usuario_act }}</p>
</div>

<!-- Fecha Act Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_act', 'Fecha Act:') !!}
    <p>{{ $compra->fecha_act }}</p>
</div>

