<!-- Idciudad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idCiudad', 'Idciudad:') !!}
    {!! Form::number('idCiudad', null, ['class' => 'form-control']) !!}
</div>

<!-- Costo Envio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('costo_envio', 'Costo Envio:') !!}
    {!! Form::number('costo_envio', null, ['class' => 'form-control']) !!}
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