<!-- Nombre Ciudad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_ciudad', 'Nombre Ciudad:') !!}
    {!! Form::text('nombre_ciudad', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
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

<!-- Estado Ciudad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_ciudad', 'Estado Ciudad:') !!}
    {!! Form::text('estado_ciudad', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20]) !!}
</div>