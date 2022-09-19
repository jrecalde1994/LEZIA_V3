<div class="table-responsive">
    <table class="table" id="carritos-table">
        <thead>
        <tr>
            <th>Idventa</th>
        <th>Idproducto</th>
        <th>Cantidad</th>
        <th>Precio Venta</th>
        <th>Usuario Act</th>
        <th>Fecha Act</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($carritos as $carrito)
            <tr>
                <td>{{ $carrito->idVenta }}</td>
            <td>{{ $carrito->idProducto }}</td>
            <td>{{ $carrito->cantidad }}</td>
            <td>{{ $carrito->precio_venta }}</td>
            <td>{{ $carrito->usuario_act }}</td>
            <td>{{ $carrito->fecha_act }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['carritos.destroy', $carrito->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('carritos.show', [$carrito->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('carritos.edit', [$carrito->id]) }}"
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
