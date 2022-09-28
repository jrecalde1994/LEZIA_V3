<!-- Idciudad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idCiudad', 'Ciudad:') !!}
    {!! Form::select('idCiudad',$ciudad, null, ['class' => 'form-control custom-select']) !!}

</div>

<!-- Calle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('calle', 'Calle:') !!}
    {!! Form::text('calle', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Calle Transversal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('calle_transversal', 'Calle Transversal:') !!}
    {!! Form::text('calle_transversal', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>

<!-- Numero Casa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_casa', 'Numero Casa:') !!}
    {!! Form::text('numero_casa', null, ['class' => 'form-control','maxlength' => 10,'maxlength' => 10]) !!}
</div>

<!-- Barrio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barrio', 'Barrio:') !!}
    {!! Form::text('barrio', null, ['class' => 'form-control','maxlength' => 15,'maxlength' => 15]) !!}
</div>

<!-- Link Mapa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link_mapa', 'Link Mapa:') !!}
    {!! Form::text('link_mapa', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Usuario Act Field -->
<div class="form-group col-sm-6">
    <!--{!! Form::label('usuario_act', 'Usuario Act:') !!}-->
    {!! Form::hidden('usuario_act', 'SYS', ['class' => 'form-control','maxlength' => 25,'maxlength' => 25]) !!}
</div>

<!-- Fecha Act Field -->
<div class="form-group col-sm-6">
    <!--{!! Form::label('fecha_act', 'Fecha Act:') !!}-->
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

<!-- Idcliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idCliente', 'Cliente:') !!}
    {!! Form::select('idCliente',$clientes, null, ['class' => 'form-control custom-select']) !!}
</div>