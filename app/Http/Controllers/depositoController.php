<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedepositoRequest;
use App\Http\Requests\UpdatedepositoRequest;
use App\Repositories\depositoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Sucursale;

class depositoController extends AppBaseController
{
    /** @var depositoRepository $depositoRepository*/
    private $depositoRepository;

    public function __construct(depositoRepository $depositoRepo)
    {
        $this->depositoRepository = $depositoRepo;
    }

    /**
     * Display a listing of the deposito.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $depositos = $this->depositoRepository->all();

        return view('depositos.index')
            ->with('depositos', $depositos);
    }

    /**
     * Show the form for creating a new deposito.
     *
     * @return Response
     */
    public function create()
    {
        $sucursals = sucursale::pluck('nombre_sucursal', 'id');
        return view('depositos.create',compact('sucursals'));
    }

    /**
     * Store a newly created deposito in storage.
     *
     * @param CreatedepositoRequest $request
     *
     * @return Response
     */
    public function store(CreatedepositoRequest $request)
    {
        $input = $request->all();

        $deposito = $this->depositoRepository->create($input);

        Flash::success('Guardado correctamente.');

        return redirect(route('depositos.index'));
    }

    /**
     * Display the specified deposito.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $deposito = $this->depositoRepository->find($id);

        if (empty($deposito)) {
            Flash::error('Dato no encontrado');

            return redirect(route('depositos.index'));
        }

        return view('depositos.show')->with('deposito', $deposito);
    }

    /**
     * Show the form for editing the specified deposito.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $deposito = $this->depositoRepository->find($id);
        $sucursals = sucursale::where('id',$deposito->idSucursal)->pluck('nombre_sucursal','id');
        if (empty($deposito)) {
            Flash::error('Dato no encontrado');

            return redirect(route('depositos.index'));
        }

        return view('depositos.edit',compact('sucursals'))->with('deposito', $deposito);
    }

    /**
     * Update the specified deposito in storage.
     *
     * @param int $id
     * @param UpdatedepositoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedepositoRequest $request)
    {
        $deposito = $this->depositoRepository->find($id);

        if (empty($deposito)) {
            Flash::error('Dato no encontrado');

            return redirect(route('depositos.index'));
        }

        $deposito = $this->depositoRepository->update($request->all(), $id);

        Flash::success('Actualizado correctamente.');

        return redirect(route('depositos.index'));
    }

    /**
     * Remove the specified deposito from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $deposito = $this->depositoRepository->find($id);

        if (empty($deposito)) {
            Flash::error('Dato no encontrado');

            return redirect(route('depositos.index'));
        }

        $this->depositoRepository->delete($id);

        Flash::success('Eliminado correctamente.');

        return redirect(route('depositos.index'));
    }
}
