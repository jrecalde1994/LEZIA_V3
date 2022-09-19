<div class="table-responsive">
    <table class="table" id="proveedors-table">
        <thead>
        <tr>
        <th>Ruc</th>
        <th>Razon Social</th>
        <th>Telefono</th>
        <th>Usuario Act</th>
        <th>Fecha Act</th>
        <th colspan="3">Acción</th>
        </tr>
        </thead>
        <tbody>
        @foreach($proveedors as $proveedor)
            <tr>
                <td>{{ $proveedor->Ruc }}</td>
            <td>{{ $proveedor->Razon_social }}</td>
            <td>{{ $proveedor->Telefono }}</td>
            <td>{{ $proveedor->usuario_act }}</td>
            <td>{{ $proveedor->fecha_act }}</td>
            <!--<td>{{ $proveedor->estado_proveedor }}</td>-->
                <td width="120">
                    {!! Form::open(['route' => ['proveedors.destroy', $proveedor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('proveedors.show', [$proveedor->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('proveedors.edit', [$proveedor->id]) }}"
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
