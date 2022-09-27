<div class="table-responsive">
    <table class="table" id="direccions-table">
        <thead>
        <tr>
        <th>Ciudad</th>
        <th>Calle</th>
        <th>Calle Transversal</th>
        <th>Numero Casa</th>
        <th>Barrio</th>
        <th>Link Mapa</th>
        <th>Usuario Act</th>
        <th>Fecha Act</th>
        <th>Cliente</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($direccions as $direccion)
            <tr>
             @foreach($ciudad as $ciudades)
               @if($ciudades->id == $direccion->idCiudad)
                    <td>{{ $ciudades->nombre_ciudad }}</td>
                @endif
            @endforeach
              <td>{{ $direccion->calle }}</td>
            <td>{{ $direccion->calle_transversal }}</td>
            <td>{{ $direccion->numero_casa }}</td>
            <td>{{ $direccion->barrio }}</td>
            <td>{{ $direccion->link_mapa }}</td>
            <td>{{ $direccion->usuario_act }}</td>
            <td>{{ $direccion->fecha_act }}</td>
            
            @foreach($cliente as $clientes)
                @if($clientes->id == $direccion->idCliente)
                    <td>{{ $clientes->Nombre .' - '. $clientes->Apellido }}</td>
                @endif
            @endforeach
            
            <td width="120">
                    {!! Form::open(['route' => ['direccions.destroy', $direccion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('direccions.show', [$direccion->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('direccions.edit', [$direccion->id]) }}"
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
