<div class="table-responsive">
    <table class="table" id="entregas-table">
        <thead>
        <tr>
            <th>Idrepartidor</th>
        <th>Fecha Asingacion</th>
        <th>Fecha Entrega</th>
        <th>Iddireccionentrega</th>
        <th>Idventa</th>
        <th>Estado Entrega</th>
        <th>Usuario Act</th>
        <th>Fecha Act</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($entregas as $entrega)
            <tr>
                <td>{{ $entrega->idRepartidor }}</td>
            <td>{{ $entrega->fecha_asingacion }}</td>
            <td>{{ $entrega->fecha_entrega }}</td>
            <td>{{ $entrega->idDireccionEntrega }}</td>
            <td>{{ $entrega->idVenta }}</td>
            <td>{{ $entrega->estado_entrega }}</td>
            <td>{{ $entrega->usuario_act }}</td>
            <td>{{ $entrega->fecha_act }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['entregas.destroy', $entrega->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('entregas.show', [$entrega->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('entregas.edit', [$entrega->id]) }}"
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
