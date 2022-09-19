<div class="table-responsive">
    <table class="table" id="productos-table">
        <thead>
        <tr>
            <th>Iddeposito</th>
        <th>Idcategoria</th>
        <th>Nombre Producto</th>
        <th>Descripcion Larga</th>
        <th>Tamanho</th>
        <th>Color</th>
        <th>Stock Minimo</th>
        <th>Precio Unitario</th>
        <th>Estado Producto</th>
        <th>Usuario Act</th>
        <th>Fecha Act</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->idDeposito }}</td>
            <td>{{ $producto->idCategoria }}</td>
            <td>{{ $producto->nombre_producto }}</td>
            <td>{{ $producto->descripcion_larga }}</td>
            <td>{{ $producto->tamanho }}</td>
            <td>{{ $producto->color }}</td>
            <td>{{ $producto->stock_minimo }}</td>
            <td>{{ $producto->precio_unitario }}</td>
            <td>{{ $producto->estado_producto }}</td>
            <td>{{ $producto->usuario_act }}</td>
            <td>{{ $producto->fecha_act }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['productos.destroy', $producto->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('productos.show', [$producto->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('productos.edit', [$producto->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
