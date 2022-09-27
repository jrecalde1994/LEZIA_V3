<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateciudadRequest;
use App\Http\Requests\UpdateciudadRequest;
use App\Repositories\ciudadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ciudadController extends AppBaseController
{
    /** @var ciudadRepository $ciudadRepository*/
    private $ciudadRepository;

    public function __construct(ciudadRepository $ciudadRepo)
    {
        $this->ciudadRepository = $ciudadRepo;
    }

    /**
     * Display a listing of the ciudad.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ciudads = $this->ciudadRepository->all();

        return view('ciudads.index')
            ->with('ciudads', $ciudads);
    }

    /**
     * Show the form for creating a new ciudad.
     *
     * @return Response
     */
    public function create()
    {
        return view('ciudads.create');
    }

    /**
     * Store a newly created ciudad in storage.
     *
     * @param CreateciudadRequest $request
     *
     * @return Response
     */
    public function store(CreateciudadRequest $request)
    {
        $input = $request->all();

        $ciudad = $this->ciudadRepository->create($input);

        Flash::success('Guardado correctamente.');

        return redirect(route('ciudads.index'));
    }

    /**
     * Display the specified ciudad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ciudad = $this->ciudadRepository->find($id);

        if (empty($ciudad)) {
            Flash::error('Ciudad no encontrada');

            return redirect(route('ciudads.index'));
        }

        return view('ciudads.show')->with('ciudad', $ciudad);
    }

    /**
     * Show the form for editing the specified ciudad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ciudad = $this->ciudadRepository->find($id);

        if (empty($ciudad)) {
            Flash::error('Ciudad no encontrada');

            return redirect(route('ciudads.index'));
        }

        return view('ciudads.edit')->with('ciudad', $ciudad);
    }

    /**
     * Update the specified ciudad in storage.
     *
     * @param int $id
     * @param UpdateciudadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateciudadRequest $request)
    {
        $ciudad = $this->ciudadRepository->find($id);

        if (empty($ciudad)) {
            Flash::error('Ciudad no encontrada');

            return redirect(route('ciudads.index'));
        }

        $ciudad = $this->ciudadRepository->update($request->all(), $id);

        Flash::success('Actualizado correctamente.');

        return redirect(route('ciudads.index'));
    }

    /**
     * Remove the specified ciudad from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ciudad = $this->ciudadRepository->find($id);

        if (empty($ciudad)) {
            Flash::error('Ciudad no encontrada');

            return redirect(route('ciudads.index'));
        }

        $this->ciudadRepository->delete($id);

        Flash::success('Eliminado correctamente.');

        return redirect(route('ciudads.index'));
    }
}
