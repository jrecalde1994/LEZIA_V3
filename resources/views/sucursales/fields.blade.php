<!-- Nombre Sucursal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_sucursal', 'Nombre Sucursal:') !!}
    {!! Form::text('nombre_sucursal', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Factura Sucursal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('factura_sucursal', 'Factura Sucursal:') !!}
    {!! Form::number('factura_sucursal', null, ['class' => 'form-control']) !!}
</div>

<!-- Usuario Act Field -->
<div class="form-group col-sm-6">
   <!-- {!! Form::label('usuario_act', 'Usuario Act:') !!}-->
    {!! Form::hidden('usuario_act', 'SYS', ['class' => 'form-control','maxlength' => 25,'maxlength' => 25]) !!}
</div>

<!-- Fecha Act Field -->

<div class="form-group col-sm-6">
   <!-- {!! Form::label('fecha_act', 'Fecha Act:') !!}-->
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