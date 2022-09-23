<!-- Idproveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idProveedor', 'Proveedor:') !!}
    {!! Form::select('idProveedor',$proveedor, null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Fecha Compra Field -->
<!--<div class="form-group col-sm-6">
    <!--{!! Form::label('fecha_compra', 'Fecha Compra:') !!}
</div>-->

{!! Form::hidden('fecha_compra', now(), ['class' => 'form-control','id'=>'fecha_compra']) !!}

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_compra').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Numero Factura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_factura', 'Numero Factura:') !!}
    {!! Form::text('numero_factura', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Usuario Act Field -->
<div class="form-group col-sm-6">
   <!-- {!! Form::label('usuario_act', 'Usuario Act:') !!}-->
    {!! Form::hidden('usuario_act', 'SYS', ['class' => 'form-control','maxlength' => 25,'maxlength' => 25]) !!}
</div>

<!-- Fecha Act Field -->
<div class="form-group col-sm-6">
    <!--{!! Form::label('fecha_act', 'Fecha Act:') !!}-->
    {!! Form::hidden('fecha_act', now(), ['class' => 'form-control','id'=>'fecha_act']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_act').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Idproducto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idProducto', 'Producto:') !!}
    {!! Form::select('idProducto',$producto, null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Compra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio_compra', 'Precio Compra:') !!}
    {!! Form::number('precio_compra', null, ['class' => 'form-control']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_act').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<div class="table-responsive">
    <a href="" id="agregar" class="btn btn-info">Agregar</a>
    <br/><br/>
    <table class="table" id="transactionTable">
        <thead>
            <tr>
            <th>Numero de Factura</th>
            <th>Cliente</th>
            <th>Cantidad</th>
            <th>Producto</th>
            <th>Precio de Compra</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<script>
    const form = document.getElementById("transactionForm");
    const button = document.getElementById('agregar');

    button.addEventListener("click", function(event){
                            event.preventDefault();
                          let transactionFormData = new FormData(form);
                          let transactionTableRef = document.getElementById("transactionTable");
                          let newTransactionRowRef = transactionTableRef.insertRow(-1);
                          
                          let newTypeCellRef = newTransactionRowRef.insertCell(0);
                          newTypeCellRef.textContent = transactionFormData.get("numero_factura");
                          
                          var e = document.getElementById("idProveedor");
                          var textProv=e.options[e.selectedIndex].text;

                          newTypeCellRef = newTransactionRowRef.insertCell(1);
                          newTypeCellRef.textContent = textProv;


                          newTypeCellRef = newTransactionRowRef.insertCell(2);
                          newTypeCellRef.textContent = transactionFormData.get("cantidad");
                          
                          var e = document.getElementById("idProducto");
                          var text=e.options[e.selectedIndex].text;

                          newTypeCellRef = newTransactionRowRef.insertCell(3);
                          newTypeCellRef.textContent = text;
                          
                          newTypeCellRef = newTransactionRowRef.insertCell(4);
                          newTypeCellRef.textContent = transactionFormData.get("precio_compra");
                        })


</script>