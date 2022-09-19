<div class="table-responsive">
    <table class="table" id="ciudads-table">
        <thead>
        <tr>
            <th>Nombre Ciudad</th>
        <th>Usuario Act</th>
        <th>Fecha Act</th>
        <th>Estado Ciudad</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ciudads as $ciudad)
            <tr>
                <td>{{ $ciudad->nombre_ciudad }}</td>
            <td>{{ $ciudad->usuario_act }}</td>
            <td>{{ $ciudad->fecha_act }}</td>
            <td>{{ $ciudad->estado_ciudad }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['ciudads.destroy', $ciudad->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ciudads.show', [$ciudad->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('ciudads.edit', [$ciudad->id]) }}"
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
