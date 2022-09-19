<div class="table-responsive">
    <table class="table" id="depositos-table">
        <thead>
        <tr>
            <th>Idsucursal</th>
        <th>Nombre Depósito</th>
        <th>Usuario Act</th>
        <th>Fecha Act</th>
            <th colspan="3">Acción</th>
        </tr>
        </thead>
        <tbody>
        @foreach($depositos as $deposito)
            <tr>
                <td>{{ $deposito->idSucursal }}</td>
            <td>{{ $deposito->nombre_deposito }}</td>
            <td>{{ $deposito->usuario_act }}</td>
            <td>{{ $deposito->fecha_act }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['depositos.destroy', $deposito->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('depositos.show', [$deposito->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('depositos.edit', [$deposito->id]) }}"
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
