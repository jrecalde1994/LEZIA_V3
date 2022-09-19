<!-- Nombre Categoria Field -->
<div class="col-sm-12">
    {!! Form::label('nombre_categoria', 'Nombre Categoria:') !!}
    <p>{{ $categoria->nombre_categoria }}</p>
</div>

<!-- Usuario Act Field -->
<div class="col-sm-12">
    {!! Form::label('usuario_act', 'Usuario Act:') !!}
    <p>{{ $categoria->usuario_act }}</p>
</div>

<!-- Fecha Act Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_act', 'Fecha Act:') !!}
    <p>{{ $categoria->fecha_act }}</p>
</div>

