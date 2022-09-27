<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createdetalle_compraRequest;
use App\Http\Requests\Updatedetalle_compraRequest;
use App\Repositories\detalle_compraRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\producto;
use App\Models\compra;
use Illuminate\Http\Request;
use Flash;
use Response;

class detalle_compraController extends AppBaseController
{
    /** @var detalle_compraRepository $detalleCompraRepository*/
    private $detalleCompraRepository;

    public function __construct(detalle_compraRepository $detalleCompraRepo)
    {
        $this->detalleCompraRepository = $detalleCompraRepo;
    }

    /**
     * Display a listing of the detalle_compra.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $detalleCompras = $this->detalleCompraRepository->all();

        return view('detalle_compras.index')
            ->with('detalleCompras', $detalleCompras);
    }

    /**
     * Show the form for creating a new detalle_compra.
     *
     * @return Response
     */
    public function create()
    {
        $producto = producto::pluck('nombre_producto', 'id');
        $selectCompras = compra::pluck('numero_factura', 'id');
        
        return view('detalle_compras.create',compact('producto','selectCompras'));
    }

    /**
     * Store a newly created detalle_compra in storage.
     *
     * @param Createdetalle_compraRequest $request
     *
     * @return Response
     */
    public function store(Createdetalle_compraRequest $request)
    {
        $input = $request->all();

        $detalleCompra = $this->detalleCompraRepository->create($input);

        Flash::success('Guardado correctamente.');

        return redirect(route('detalleCompras.index'));
    }

    /**
     * Display the specified detalle_compra.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $detalleCompra = $this->detalleCompraRepository->find($id);

        if (empty($detalleCompra)) {
            Flash::error('Dato no encontrado');

            return redirect(route('detalleCompras.index'));
        }

        return view('detalle_compras.show')->with('detalleCompra', $detalleCompra);
    }

    /**
     * Show the form for editing the specified detalle_compra.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $detalleCompra = $this->detalleCompraRepository->find($id);

        $producto = producto::where('id',$detalleCompra->idProducto)->pluck('nombre_producto','id');
        $selectCompras = compra::where('id',$detalleCompra->idCompra)->pluck('numero_factura','id');

        if (empty($detalleCompra)) {
            Flash::error('Dato no encontrado');

            return redirect(route('detalleCompras.index'));
        }

        return view('detalle_compras.edit',compact('producto','selectCompras'))->with('detalleCompra', $detalleCompra);
    }

    /**
     * Update the specified detalle_compra in storage.
     *
     * @param int $id
     * @param Updatedetalle_compraRequest $request
     *
     * @return Response
     */
    public function update($id, Updatedetalle_compraRequest $request)
    {
        $detalleCompra = $this->detalleCompraRepository->find($id);

        if (empty($detalleCompra)) {
            Flash::error('Dato no econtrado');

            return redirect(route('detalleCompras.index'));
        }

        $detalleCompra = $this->detalleCompraRepository->update($request->all(), $id);

        Flash::success('Actualizado correctamente.');

        return redirect(route('detalleCompras.index'));
    }

    /**
     * Remove the specified detalle_compra from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
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
