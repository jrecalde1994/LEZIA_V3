<div class="table-responsive">
    <table class="table" id="motivoAjustes-table">
        <thead>
        <tr>
            <th>Motivo</th>
        <th>Usuario Act</th>
        <th>Fecha Act</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($motivoAjustes as $motivoAjuste)
            <tr>
                <td>{{ $motivoAjuste->motivo }}</td>
            <td>{{ $motivoAjuste->usuario_act }}</td>
            <td>{{ $motivoAjuste->fecha_act }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['motivoAjustes.destroy', $motivoAjuste->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('motivoAjustes.show', [$motivoAjuste->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('motivoAjustes.edit', [$motivoAjuste->id]) }}"
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
