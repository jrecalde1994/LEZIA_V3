<!-- Idcaja Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcaja', 'Idcaja:') !!}
    {!! Form::number('idcaja', null, ['class' => 'form-control']) !!}
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

<!-- Idlogin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idLogin', 'Idlogin:') !!}
    {!! Form::number('idLogin', null, ['class' => 'form-control']) !!}
</div>