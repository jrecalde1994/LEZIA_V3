<!-- Idrepartidor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idRepartidor', 'Idrepartidor:') !!}
    {!! Form::number('idRepartidor', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Asingacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_asingacion', 'Fecha Asingacion:') !!}
    {!! Form::text('fecha_asingacion', null, ['class' => 'form-control','id'=>'fecha_asingacion']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_asingacion').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Fecha Entrega Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_entrega', 'Fecha Entrega:') !!}
    {!! Form::text('fecha_entrega', null, ['class' => 'form-control','id'=>'fecha_entrega']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_entrega').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Iddireccionentrega Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idDireccionEntrega', 'Iddireccionentrega:') !!}
    {!! Form::number('idDireccionEntrega', null, ['class' => 'form-control']) !!}
</div>

<!-- Idventa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idVenta', 'Idventa:') !!}
    {!! Form::number('idVenta', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Entrega Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_entrega', 'Estado Entrega:') !!}
    {!! Form::text('estado_entrega', null, ['class' => 'form-control','maxlength' => 10,'maxlength' => 10]) !!}
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