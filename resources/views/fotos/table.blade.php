<div class="table-responsive">
    <table class="table" id="fotos-table">
        <thead>
        <tr>
            <th>Idproducto</th>
        <th>Url Foto</th>
        <th>Usuario Act</th>
        <th>Fecha Act</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($fotos as $foto)
            <tr>
                <td>{{ $foto->idProducto }}</td>
            <td>{{ $foto->url_foto }}</td>
            <td>{{ $foto->usuario_act }}</td>
            <td>{{ $foto->fecha_act }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['fotos.destroy', $foto->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('fotos.show', [$foto->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('fotos.edit', [$foto->id]) }}"
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
