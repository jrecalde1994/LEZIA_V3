<div class="table-responsive">
    <table class="table" id="logins-table">
        <thead>
        <tr>
            <th>Usuario</th>
        <th>Clave</th>
        <th>Perfil</th>
        <th>Usuario Act</th>
        <th>Fecha Act</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($logins as $login)
            <tr>
                <td>{{ $login->usuario }}</td>
            <td>{{ $login->clave }}</td>
            <td>{{ $login->perfil }}</td>
            <td>{{ $login->usuario_act }}</td>
            <td>{{ $login->fecha_act }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['logins.destroy', $login->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('logins.show', [$login->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('logins.edit', [$login->id]) }}"
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
