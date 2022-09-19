<!-- Ruc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Ruc', 'Ruc:') !!}
    {!! Form::text('Ruc', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20]) !!}
</div>

<!-- Razon Social Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Razon_social', 'Razon Social:') !!}
    {!! Form::text('Razon_social', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Telefono', 'Telefono:') !!}
    {!! Form::text('Telefono', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20]) !!}
</div>

<!-- Usuario Act Field -->
<div class="form-group col-sm-6">
    <!--{!! Form::label('usuario_act', 'Usuario Act:') !!}-->
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

<!-- Estado Proveedor Field -->
<!--<div class="form-group col-sm-6">
    {!! Form::label('estado_proveedor', 'Estado Proveedor:') !!}
    {!! Form::text('estado_proveedor', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20]) !!}
</div>-->