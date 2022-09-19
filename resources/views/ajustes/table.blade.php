<div class="table-responsive">
    <table class="table" id="ajustes-table">
        <thead>
        <tr>
            <th>Idmotivoajuste</th>
        <th>Idproducto</th>
        <th>Existencia Anterior</th>
        <th>Existencia Actual</th>
        <th>Diferencia</th>
        <th>Usuario Act</th>
        <th>Fecha Act</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ajustes as $ajuste)
            <tr>
                <td>{{ $ajuste->idMotivoAjuste }}</td>
            <td>{{ $ajuste->idProducto }}</td>
            <td>{{ $ajuste->existencia_anterior }}</td>
            <td>{{ $ajuste->existencia_actual }}</td>
            <td>{{ $ajuste->diferencia }}</td>
            <td>{{ $ajuste->usuario_act }}</td>
            <td>{{ $ajuste->fecha_act }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['ajustes.destroy', $ajuste->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ajustes.show', [$ajuste->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('ajustes.edit', [$ajuste->id]) }}"
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
