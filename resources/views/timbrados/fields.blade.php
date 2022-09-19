<!-- Idcaja Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idCaja', 'Idcaja:') !!}
    {!! Form::number('idCaja', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Timbrado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_timbrado', 'Numero Timbrado:') !!}
    {!! Form::number('numero_timbrado', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    {!! Form::text('fecha_inicio', null, ['class' => 'form-control','id'=>'fecha_inicio']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_inicio').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Fecha Vencimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_vencimiento', 'Fecha Vencimiento:') !!}
    {!! Form::text('fecha_vencimiento', null, ['class' => 'form-control','id'=>'fecha_vencimiento']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_vencimiento').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Primera Factura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('primera_factura', 'Primera Factura:') !!}
    {!! Form::number('primera_factura', null, ['class' => 'form-control']) !!}
</div>

<!-- Factura Actual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('factura_actual', 'Factura Actual:') !!}
    {!! Form::number('factura_actual', null, ['class' => 'form-control']) !!}
</div>

<!-- Ultima Factura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ultima_factura', 'Ultima Factura:') !!}
    {!! Form::number('ultima_factura', null, ['class' => 'form-control']) !!}
</div>

<!-- Usuario Act Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuario_act', 'Usuario Act:') !!}
    {!! Form::text('usuario_act', null, ['class' => 'form-control','maxlength' => 25,'maxlength' => 25]) !!}
</div>

<!-- Fecha Act Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_act', 'Fecha Act:') !!}
    {!! Form::text('fecha_act', null, ['class' => 'form-control','id'=>'fecha_act']) !!}
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