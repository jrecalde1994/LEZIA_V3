<div class="table-responsive">
    <table class="table" id="vendedors-table">
        <thead>
        <tr>
            <th>Idcaja</th>
        <th>Usuario Act</th>
        <th>Fecha Act</th>
        <th>Idlogin</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($vendedors as $vendedor)
            <tr>
                <td>{{ $vendedor->idcaja }}</td>
            <td>{{ $vendedor->usuario_act }}</td>
            <td>{{ $vendedor->fecha_act }}</td>
            <td>{{ $vendedor->idLogin }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['vendedors.destroy', $vendedor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('vendedors.show', [$vendedor->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('vendedors.edit', [$vendedor->id]) }}"
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
