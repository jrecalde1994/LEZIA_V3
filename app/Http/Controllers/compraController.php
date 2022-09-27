<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecompraRequest;
use App\Http\Requests\UpdatecompraRequest;
use App\Repositories\compraRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\detalle_compra;
use App\Models\proveedor;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\producto;
use App\Repositories\detalle_compraRepository;
use DB;

class compraController extends AppBaseController
{
    /** @var compraRepository $compraRepository*/
    private $compraRepository;
    private $detalleCompraRepository;
    private $idCompra;

    public function __construct(compraRepository $compraRepo,detalle_compraRepository $detallecompraRepo)
    {
        $this->compraRepository = $compraRepo;
        $this->detalleCompraRepository = $detallecompraRepo;

    }

    /**
     * Display a listing of the compra.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $compras = $this->compraRepository->all();

        return view('compras.index')
            ->with('compras', $compras);
    }

    /**
     * Show the form for creating a new compra.
     *
     * @return Response
     */
    public function create()
    {
        $proveedor = proveedor::pluck('Razon_social', 'id');
        $producto = producto::pluck('nombre_producto','id');
        $detallecompra = "";
        return view('compras.create',compact('proveedor','producto','detallecompra'));
    }

    /**
     * Store a newly created compra in storage.
     *
     * @param CreatecompraRequest $request
     *
     * @return Response
     */
    public function store(CreatecompraRequest $request)
    {
        $input = $request->all();

        $compra = $this->compraRepository->create($input);
        $indice = count(explode(',',$request->idProdhideen[0]));
        
        for($i = 0; $i< $indice;$i++)
        {
            $DetalleCompra = array('idCompra' => $compra->id, 
                                   'idProducto' => explode(',',$request->idProdhideen[0])[$i],
                                   'cantidad' => explode(',',$request->cantidadhidden[0])[$i],
                                   'precio_compra' => explode(',',$request->preciocomprahidden[0])[$i],
                                   'usuario_act' => $request->usuario_act,
                                   'fecha_act' => $request->fecha_act);
            $detalleCompra = $this->detalleCompraRepository->create($DetalleCompra);

        }
        
        Flash::success('Guardado correctamente.');
        return redirect(route('compras.index'));
    }

    /**
     * Display the specified compra.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $compra = $this->compraRepository->find($id);

        if (empty($compra)) {
            Flash::error('Dato no encontrado');

            return redirect(route('compras.index'));
        }

        return view('compras.show')->with('compra', $compra);
    }

    /**
     * Show the form for editing the specified compra.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $compra = $this->compraRepository->find($id);

        $detallecompra = DB::table('detalle_compra')->where('idCompra', '=', $id)->get();
        $proveedor = proveedor::where('id',$compra->idProveedor)->pluck('Razon_social','id');
        $producto = producto::pluck('nombre_producto', 'id');
        $detalleProducto = DB::table('producto')->get();


        if (empty($compra)) {
            Flash::error('Dato no encontrado');

            return redirect(route('compras.index'));
        }

        return view('compras.edit',compact('proveedor','producto','detallecompra','detalleProducto'))->with('compra', $compra);
    }

    /**
     * Update the specified compra in storage.
     *
     * @param int $id
     * @param UpdatecompraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecompraRequest $request)
    {
        $compra = $this->compraRepository->find($id);
        $indice = count(explode(',',$request->idProdhideen[0]));
        
        for($i = 0; $i< $indice;$i++)
        {
            $DetalleCompra = array('idCompra' => $id, 
                                   'idProducto' => explode(',',$request->idProdhideen[0])[$i],
                                   'cantidad' => explode(',',$request->cantidadhidden[0])[$i],
                                   'precio_compra' => explode(',',$request->preciocomprahidden[0])[$i],
                                   'usuario_act' => $request->usuario_act,
                                   'fecha_act' => $request->fecha_act);
            $detalleCompra = $this->detalleCompraRepository->create($DetalleCompra);

        }

        if (empty($compra)) {
            Flash::error('Dato no encontrado');

            return redirect(route('compras.index'));
        }

        $compra = $this->compraRepository->update($request->all(), $id);
        $detallecompra = DB::table('detalle_compra')->where('idCompra', '=', $id)->get();

        Flash::success('Actualizado correctamente.');

        return redirect(route('compras.index'));
    }

    /**
     * Remove the specified compra from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $compra = $this->compraRepository->find($id);

        if (empty($compra)) {
            Flash::error('Dato no encontrado');

            return redirect(route('compras.index'));
        }

        $this->compraRepository->delete($id);

        Flash::success('Eliminado correctamente.');

        return redirect(route('compras.index'));
    }

    public function Eliminar($id)
    {
        dd($_GET['id']);
        $detalleCompra = $this->detalleCompraRepository->find($id);

        if (empty($detalleCompra)) {
            Flash::error('Dato no encontrado');

            return redirect(route('compras.index'));
        }

        $this->detalleCompraRepository->delete($id);

        Flash::success('Eliminado correctamente.');

        return redirect(route('compras.index'));

    }
}
