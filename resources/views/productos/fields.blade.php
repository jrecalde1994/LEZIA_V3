<!-- Iddeposito Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idDeposito', 'Deposito:') !!}
    {!! Form::select('idDeposito',$deposito, null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Idcategoria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idCategoria', 'Categoria:') !!}
    {!! Form::select('idCategoria',$categoria, null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Nombre Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_producto', 'Nombre Producto:') !!}
    {!! Form::text('nombre_producto', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Descripcion Larga Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion_larga', 'Descripcion Larga:') !!}
    {!! Form::text('descripcion_larga', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tamanho Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tamanho', 'Tamaño:') !!}
    {!! Form::text('tamanho', null, ['class' => 'form-control','maxlength' => 10,'maxlength' => 10]) !!}
</div>

<!-- Color Field -->
<div class="form-group col-sm-6">
    {!! Form::label('color', 'Color:') !!}
    {!! Form::text('color', null, ['class' => 'form-control','maxlength' => 15,'maxlength' => 15]) !!}
</div>

<!-- Stock Minimo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stock_minimo', 'Stock Minimo:') !!}
    {!! Form::number('stock_minimo', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Unitario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio_unitario', 'Precio Unitario:') !!}
    {!! Form::number('precio_unitario', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_producto', 'Estado Producto:') !!}
   <!-- {!! Form::text('estado_producto', null, ['class' => 'form-control','maxlength' => 10,'maxlength' => 10]) !!}-->
    {!! Form::select('estado_producto', array('Activo' => 'Activo', 'Inactivo' => 'Inactivo'), null, ['class' => 'form-control custom-select']) !!}
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