<div class="table-responsive">
    <table class="table" id="cajas-table">
        <thead>
        <tr>
            <th>Sucursal</th>
        <th>Punto Expedicion</th>
        <th>Usuario Act</th>
        <th>Fecha Act</th>
            <th colspan="3">Accion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cajas as $caja)
            <tr>
                <td>{{ $caja->idSucursal }}</td>
            <td>{{ $caja->punto_expedicion }}</td>
            <td>{{ $caja->usuario_act }}</td>
            <td>{{ $caja->fecha_act }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['cajas.destroy', $caja->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cajas.show', [$caja->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('cajas.edit', [$caja->id]) }}"
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
