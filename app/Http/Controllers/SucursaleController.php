<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSucursaleRequest;
use App\Http\Requests\UpdateSucursaleRequest;
use App\Repositories\SucursaleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SucursaleController extends AppBaseController
{
    /** @var SucursaleRepository $sucursaleRepository*/
    private $sucursaleRepository;

    public function __construct(SucursaleRepository $sucursaleRepo)
    {
        $this->sucursaleRepository = $sucursaleRepo;
    }

    /**
     * Display a listing of the Sucursale.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sucursales = $this->sucursaleRepository->all();

        return view('sucursales.index')
            ->with('sucursales', $sucursales);
    }

    /**
     * Show the form for creating a new Sucursale.
     *
     * @return Response
     */
    public function create()
    {
        return view('sucursales.create');
    }

    /**
     * Store a newly created Sucursale in storage.
     *
     * @param CreateSucursaleRequest $request
     *
     * @return Response
     */
    public function store(CreateSucursaleRequest $request)
    {
        $input = $request->all();

        $sucursale = $this->sucursaleRepository->create($input);

        Flash::success('Sucursal guardado correctamente.');

        return redirect(route('sucursales.index'));
    }

    /**
     * Display the specified Sucursale.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sucursale = $this->sucursaleRepository->find($id);

        if (empty($sucursale)) {
            Flash::error('Sucursal not encontrada');

            return redirect(route('sucursales.index'));
        }

        return view('sucursales.show')->with('sucursale', $sucursale);
    }

    /**
     * Show the form for editing the specified Sucursale.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sucursale = $this->sucursaleRepository->find($id);

        if (empty($sucursale)) {
            Flash::error('Sucursale no encontrada');

            return redirect(route('sucursales.index'));
        }

        return view('sucursales.edit')->with('sucursale', $sucursale);
    }

    /**
     * Update the specified Sucursale in storage.
     *
     * @param int $id
     * @param UpdateSucursaleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSucursaleRequest $request)
    {
        $sucursale = $this->sucursaleRepository->find($id);

        if (empty($sucursale)) {
            Flash::error('Sucursal no encontrada');

            return redirect(route('sucursales.index'));
        }

        $sucursale = $this->sucursaleRepository->update($request->all(), $id);

        Flash::success('Sucursal actualizado exitosamente.');

        return redirect(route('sucursales.index'));
    }

    /**
     * Remove the specified Sucursale from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sucursale = $this->sucursaleRepository->find($id);

        if (empty($sucursale)) {
            Flash::error('Sucursal no encontrada');

            return redirect(route('sucursales.index'));
        }

        $this->sucursaleRepository->delete($id);

        Flash::success('Sucursal eliminado satisfactoriamente.');

        return redirect(route('sucursales.index'));
    }
}
