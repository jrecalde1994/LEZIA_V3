<!-- Usuario Field -->
<div class="col-sm-12">
    {!! Form::label('usuario', 'Usuario:') !!}
    <p>{{ $login->usuario }}</p>
</div>

<!-- Clave Field -->
<div class="col-sm-12">
    {!! Form::label('clave', 'Clave:') !!}
    <p>{{ $login->clave }}</p>
</div>

<!-- Perfil Field -->
<div class="col-sm-12">
    {!! Form::label('perfil', 'Perfil:') !!}
    <p>{{ $login->perfil }}</p>
</div>

<!-- Usuario Act Field -->
<div class="col-sm-12">
    {!! Form::label('usuario_act', 'Usuario Act:') !!}
    <p>{{ $login->usuario_act }}</p>
</div>

<!-- Fecha Act Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_act', 'Fecha Act:') !!}
    <p>{{ $login->fecha_act }}</p>
</div>

