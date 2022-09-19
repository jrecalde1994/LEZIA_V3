<div class="table-responsive">
    <table class="table" id="sucursales-table">
        <thead>
        <tr>
            <th>Nombre Sucursal</th>
        <th>Factura Sucursal</th>
        <th>Usuario Act</th>
        <th>Fecha Act</th>
            <th colspan="3">Acción</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sucursales as $sucursale)
            <tr>
                <td>{{ $sucursale->nombre_sucursal }}</td>
            <td>{{ $sucursale->factura_sucursal }}</td>
            <td>{{ $sucursale->usuario_act }}</td>
            <td>{{ $sucursale->fecha_act }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['sucursales.destroy', $sucursale->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sucursales.show', [$sucursale->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('sucursales.edit', [$sucursale->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estas seguro que desas eliminar?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
