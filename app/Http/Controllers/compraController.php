<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecompraRequest;
use App\Http\Requests\UpdatecompraRequest;
use App\Repositories\compraRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\proveedor;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\producto;

class compraController extends AppBaseController
{
    /** @var compraRepository $compraRepository*/
    private $compraRepository;

    public function __construct(compraRepository $compraRepo)
    {
        $this->compraRepository = $compraRepo;
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
        return view('compras.create',compact('proveedor'));
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

        $selectCompras = array('numero_factura' => $compra->numero_factura, 'id' => $compra->id);
        $producto = producto::pluck('nombre_producto', 'id');

        Flash::success('Guardado correctamente.');

        return redirect(route('detalleCompras.create',compact('selectCompras','producto')));
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
        $proveedor = proveedor::where('id',$compra->idProveedor)->pluck('Razon_social','id');

        if (empty($compra)) {
            Flash::error('Dato no encontrado');

            return redirect(route('compras.index'));
        }

        return view('compras.edit',compact('proveedor'))->with('compra', $compra);
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

        if (empty($compra)) {
            Flash::error('Dato no encontrado');

            return redirect(route('compras.index'));
        }

        $compra = $this->compraRepository->update($request->all(), $id);

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
}
