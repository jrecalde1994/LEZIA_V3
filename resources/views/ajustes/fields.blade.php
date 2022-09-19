<!-- Idmotivoajuste Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idMotivoAjuste', 'Idmotivoajuste:') !!}
    {!! Form::number('idMotivoAjuste', null, ['class' => 'form-control']) !!}
</div>

<!-- Idproducto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idProducto', 'Idproducto:') !!}
    {!! Form::number('idProducto', null, ['class' => 'form-control']) !!}
</div>

<!-- Existencia Anterior Field -->
<div class="form-group col-sm-6">
    {!! Form::label('existencia_anterior', 'Existencia Anterior:') !!}
    {!! Form::number('existencia_anterior', null, ['class' => 'form-control']) !!}
</div>

<!-- Existencia Actual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('existencia_actual', 'Existencia Actual:') !!}
    {!! Form::number('existencia_actual', null, ['class' => 'form-control']) !!}
</div>

<!-- Diferencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('diferencia', 'Diferencia:') !!}
    {!! Form::number('diferencia', null, ['class' => 'form-control']) !!}
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