<div class="table-responsive">
    <table class="table" id="compras-table">
        <thead>
        <tr>
        <th>Idproveedor</th>
        <th>Fecha Compra</th>
        <th>Numero Factura</th>
        <th>Usuario Act</th>
        <th>Fecha Act</th>
            <th colspan="3">Acción</th>
        </tr>
        </thead>
        <tbody>
        @foreach($compras as $compra)
            <tr>
                <td>{{ $compra->idProveedor }}</td>
            <td>{{ $compra->fecha_compra }}</td>
            <td>{{ $compra->numero_factura }}</td>
            <td>{{ $compra->usuario_act }}</td>
            <td>{{ $compra->fecha_act }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['compras.destroy', $compra->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('compras.show', [$compra->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('compras.edit', [$compra->id]) }}"
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
