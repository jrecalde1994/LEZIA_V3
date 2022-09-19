<!-- Idcliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idCliente', 'Cliente:') !!}
    {!! Form::select('idCliente',$cliente, null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Fecha Venta Field -->
<div class="form-group col-sm-6">
    <!--{!! Form::label('fecha_venta', 'Fecha Venta:') !!}-->
    {!! Form::hidden('fecha_venta', now(), ['class' => 'form-control','id'=>'fecha_venta']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_venta').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Sucursal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sucursal', 'Sucursal:') !!}
    <!--{!! Form::number('sucursal', null, ['class' => 'form-control']) !!}-->
    {!! Form::select('sucursal',$sucursals, null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Punto Expedicion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('punto_expedicion', 'Punto Expedicion:') !!}
    {!! Form::number('punto_expedicion', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Factura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_factura', 'Numero Factura:') !!}
    {!! Form::text('numero_factura', null, ['class' => 'form-control','maxlength' => 15,'maxlength' => 15]) !!}
</div>

<!-- Condicion Venta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('condicion_venta', 'Condicion Venta:') !!}
    {!! Form::select('condicion_venta', array('Contado' => 'Contado', 'Credito' => 'Crédito'), null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Numero Transaccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_transaccion', 'Numero Transaccion:') !!}
    {!! Form::text('numero_transaccion', null, ['class' => 'form-control','maxlength' => 150,'maxlength' => 150]) !!}
</div>

<!-- Estado De Factura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_de_factura', 'Estado De Factura:') !!}
    {!! Form::select('estado_de_factura', array('Vigente' => 'Vigente', 'Anulado' => 'Anulado'), null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Usuario Act Field -->
<div class="form-group col-sm-6">
    <!--{!! Form::label('usuario_act', 'Usuario Act:') !!}-->
    {!! Form::hidden('usuario_act', 'SYS', ['class' => 'form-control','maxlength' => 25,'maxlength' => 25]) !!}
</div>

<!-- Fecha Act Field -->
<div class="form-group col-sm-6">
    <!--{!! Form::label('fecha_act', 'Fecha Act:') !!}-->
    {!! Form::hidden('fecha_act', now(), ['class' => 'form-control','id'=>'fecha_act']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_act').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush