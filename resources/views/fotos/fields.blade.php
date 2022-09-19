<!-- Idproducto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idProducto', 'Idproducto:') !!}
    {!! Form::number('idProducto', null, ['class' => 'form-control']) !!}
</div>

<!-- Url Foto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url_foto', 'Url Foto:') !!}
    {!! Form::text('url_foto', null, ['class' => 'form-control','maxlength' => 300,'maxlength' => 300]) !!}
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