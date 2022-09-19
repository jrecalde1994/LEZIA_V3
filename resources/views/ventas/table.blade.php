
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

<div class="table-responsive" id="myTable">
    <table class="table" id="ventas-table">
        <thead>
        <tr>
            <th>Idcliente</th>
        <th>Fecha Venta</th>
        <th>Sucursal</th>
        <th>Punto Expedicion</th>
        <th>Numero Factura</th>
        <th>Condicion Venta</th>
        <th>Numero Transaccion</th>
        <th>Estado De Factura</th>
        <th>Usuario Act</th>
        <th>Fecha Act</th>
        <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ventas as $venta)
            <tr>
                <td>{{ $venta->idCliente }}</td>
            <td>{{ $venta->fecha_venta }}</td>
            <td>{{ $venta->sucursal }}</td>
            <td>{{ $venta->punto_expedicion }}</td>
            <td>{{ $venta->numero_factura }}</td>
            <td>{{ $venta->condicion_venta }}</td>
            <td>{{ $venta->numero_transaccion }}</td>
            <td>{{ $venta->estado_de_factura }}</td>
            <td>{{ $venta->usuario_act }}</td>
            <td>{{ $venta->fecha_act }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['ventas.destroy', $venta->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ventas.show', [$venta->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('ventas.edit', [$venta->id]) }}"
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

<script>
    function myFunction() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
    
      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
</script>