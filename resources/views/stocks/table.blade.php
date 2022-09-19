<div class="table-responsive">
    <table class="table" id="stocks-table">
        <thead>
        <tr>
            <th>Idproducto</th>
        <th>Existencia Actual</th>
        <th>Lote</th>
        <th>Usuario Act</th>
        <th>Fecha Act</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($stocks as $stock)
            <tr>
                <td>{{ $stock->idProducto }}</td>
            <td>{{ $stock->existencia_actual }}</td>
            <td>{{ $stock->lote }}</td>
            <td>{{ $stock->usuario_act }}</td>
            <td>{{ $stock->fecha_act }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['stocks.destroy', $stock->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('stocks.show', [$stock->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('stocks.edit', [$stock->id]) }}"
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
