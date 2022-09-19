<div class="table-responsive">
    <table class="table" id="envios-table">
        <thead>
        <tr>
            <th>Idciudad</th>
        <th>Costo Envio</th>
        <th>Usuario Act</th>
        <th>Fecha Act</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($envios as $envio)
            <tr>
                <td>{{ $envio->idCiudad }}</td>
            <td>{{ $envio->costo_envio }}</td>
            <td>{{ $envio->usuario_act }}</td>
            <td>{{ $envio->fecha_act }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['envios.destroy', $envio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('envios.show', [$envio->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('envios.edit', [$envio->id]) }}"
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
