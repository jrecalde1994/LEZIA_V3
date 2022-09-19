<div class="table-responsive">
    <table class="table" id="timbrados-table">
        <thead>
        <tr>
            <th>Idcaja</th>
        <th>Numero Timbrado</th>
        <th>Fecha Inicio</th>
        <th>Fecha Vencimiento</th>
        <th>Primera Factura</th>
        <th>Factura Actual</th>
        <th>Ultima Factura</th>
        <th>Usuario Act</th>
        <th>Fecha Act</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($timbrados as $timbrado)
            <tr>
                <td>{{ $timbrado->idCaja }}</td>
            <td>{{ $timbrado->numero_timbrado }}</td>
            <td>{{ $timbrado->fecha_inicio }}</td>
            <td>{{ $timbrado->fecha_vencimiento }}</td>
            <td>{{ $timbrado->primera_factura }}</td>
            <td>{{ $timbrado->factura_actual }}</td>
            <td>{{ $timbrado->ultima_factura }}</td>
            <td>{{ $timbrado->usuario_act }}</td>
            <td>{{ $timbrado->fecha_act }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['timbrados.destroy', $timbrado->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('timbrados.show', [$timbrado->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('timbrados.edit', [$timbrado->id]) }}"
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
