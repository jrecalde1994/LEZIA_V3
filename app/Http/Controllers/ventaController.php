<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateventaRequest;
use App\Http\Requests\UpdateventaRequest;
use App\Repositories\ventaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\cliente;
use App\Models\sucursale;

class ventaController extends AppBaseController
{
    /** @var ventaRepository $ventaRepository*/
    private $ventaRepository;

    public function __construct(ventaRepository $ventaRepo)
    {
        $this->ventaRepository = $ventaRepo;
    }

    /**
     * Display a listing of the venta.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ventas = $this->ventaRepository->all();

        return view('ventas.index')
            ->with('ventas', $ventas);
    }

    /**
     * Show the form for creating a new venta.
     *
     * @return Response
     */
    public function create()
    {
        /*$Cliente_datos = cliente::pluck('nombre_sucursal', 'id');*/
        
        $cliente = cliente::pluck('Nombre', 'id');
        $sucursals = sucursale::pluck('nombre_sucursal', 'id');
        return view('ventas.create',compact('cliente','sucursals'));
    }

    /**
     * Store a newly created venta in storage.
     *
     * @param CreateventaRequest $request
     *
     * @return Response
     */
    public function store(CreateventaRequest $request)
    {
        $input = $request->all();

        $venta = $this->ventaRepository->create($input);

        Flash::success('Venta guardado correctamente.');

        return redirect(route('ventas.index'));
    }

    /**
     * Display the specified venta.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $venta = $this->ventaRepository->find($id);

        if (empty($venta)) {
            Flash::error('Venta no encontrada');

            return redirect(route('ventas.index'));
        }

        return view('ventas.show')->with('venta', $venta);
    }

    /**
     * Show the form for editing the specified venta.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $venta = $this->ventaRepository->find($id);

        if (empty($venta)) {
            Flash::error('Venta no encontrada');

            return redirect(route('ventas.index'));
        }

        return view('ventas.edit')->with('venta', $venta);
    }

    /**
     * Update the specified venta in storage.
     *
     * @param int $id
     * @param UpdateventaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateventaRequest $request)
    {
        $venta = $this->ventaRepository->find($id);

        if (empty($venta)) {
            Flash::error('Venta no encontrada');

            return redirect(route('ventas.index'));
        }

        $venta = $this->ventaRepository->update($request->all(), $id);

        Flash::success('Venta actualizada satisfactoriamente.');

        return redirect(route('ventas.index'));
    }

    /**
     * Remove the specified venta from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $venta = $this->ventaRepository->find($id);

        if (empty($venta)) {
            Flash::error('Venta no encontrada');

            return redirect(route('ventas.index'));
        }

        $this->ventaRepository->delete($id);

        Flash::success('Venta eliminada correctamente.');

        return redirect(route('ventas.index'));
    }
}
