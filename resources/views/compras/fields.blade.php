<!-- Idproveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idProveedor', 'Idproveedor:') !!}
    {!! Form::select('idProveedor',$proveedor, null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Fecha Compra Field -->
<div class="form-group col-sm-6">
    <!--{!! Form::label('fecha_compra', 'Fecha Compra:') !!}-->
    {!! Form::hidden('fecha_compra', now(), ['class' => 'form-control','id'=>'fecha_compra']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_compra').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Numero Factura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_factura', 'Numero Factura:') !!}
    {!! Form::text('numero_factura', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Usuario Act Field -->
<div class="form-group col-sm-6">
   <!-- {!! Form::label('usuario_act', 'Usuario Act:') !!}-->
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