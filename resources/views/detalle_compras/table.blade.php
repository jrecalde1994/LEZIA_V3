<div class="table-responsive">
    <table class="table" id="detalleCompras-table">
        <thead>
        <tr>
            <th>Idcompra</th>
        <th>Idproducto</th>
        <th>Cantidad</th>
        <th>Precio Compra</th>
        <th>Usuario Act</th>
        <th>Fecha Act</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($detalleCompras as $detalleCompra)
            <tr>
                <td>{{ $detalleCompra->idCompra }}</td>
            <td>{{ $detalleCompra->idProducto }}</td>
            <td>{{ $detalleCompra->cantidad }}</td>
            <td>{{ $detalleCompra->precio_compra }}</td>
            <td>{{ $detalleCompra->usuario_act }}</td>
            <td>{{ $detalleCompra->fecha_act }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['detalleCompras.destroy', $detalleCompra->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('detalleCompras.show', [$detalleCompra->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('detalleCompras.edit', [$detalleCompra->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estas seguro que deseas eliminar?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
