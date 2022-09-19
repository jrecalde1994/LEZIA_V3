<div class="table-responsive">
    <table class="table" id="repartidors-table">
        <thead>
        <tr>
            <th>Cedula</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th>Fecha Act</th>
        <th>Usuario Act</th>
        <th>Estado Repartidor</th>
        <th>Idlogin</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($repartidors as $repartidor)
            <tr>
                <td>{{ $repartidor->Cedula }}</td>
            <td>{{ $repartidor->Nombre }}</td>
            <td>{{ $repartidor->Apellido }}</td>
            <td>{{ $repartidor->telefono }}</td>
            <td>{{ $repartidor->fecha_act }}</td>
            <td>{{ $repartidor->usuario_act }}</td>
            <td>{{ $repartidor->estado_repartidor }}</td>
            <td>{{ $repartidor->idLogin }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['repartidors.destroy', $repartidor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('repartidors.show', [$repartidor->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('repartidors.edit', [$repartidor->id]) }}"
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
