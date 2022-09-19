<!-- Idventa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idVenta', 'Idventa:') !!}
    {!! Form::number('idVenta', null, ['class' => 'form-control']) !!}
</div>

<!-- Idproducto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idProducto', 'Idproducto:') !!}
    {!! Form::number('idProducto', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Venta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio_venta', 'Precio Venta:') !!}
    {!! Form::number('precio_venta', null, ['class' => 'form-control']) !!}
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