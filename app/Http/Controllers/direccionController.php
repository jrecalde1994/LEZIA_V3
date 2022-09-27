<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedireccionRequest;
use App\Http\Requests\UpdatedireccionRequest;
use App\Repositories\direccionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class direccionController extends AppBaseController
{
    /** @var direccionRepository $direccionRepository*/
    private $direccionRepository;

    public function __construct(direccionRepository $direccionRepo)
    {
        $this->direccionRepository = $direccionRepo;
    }

    /**
     * Display a listing of the direccion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $direccions = $this->direccionRepository->all();

        return view('direccions.index')
            ->with('direccions', $direccions);
    }

    /**
     * Show the form for creating a new direccion.
     *
     * @return Response
     */
    public function create()
    {
        return view('direccions.create');
    }

    /**
     * Store a newly created direccion in storage.
     *
     * @param CreatedireccionRequest $request
     *
     * @return Response
     */
    public function store(CreatedireccionRequest $request)
    {
        $input = $request->all();

        $direccion = $this->direccionRepository->create($input);

        Flash::success('Direccion ha sido guardado correctamente.');

        return redirect(route('direccions.index'));
    }

    /**
     * Display the specified direccion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $direccion = $this->direccionRepository->find($id);

        if (empty($direccion)) {
            Flash::error('Direccion no se ha encontrado.');

            return redirect(route('direccions.index'));
        }

        return view('direccions.show')->with('direccion', $direccion);
    }

    /**
     * Show the form for editing the specified direccion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $direccion = $this->direccionRepository->find($id);

        if (empty($direccion)) {
            Flash::error('Direccion no se ha encontrado.');

            return redirect(route('direccions.index'));
        }

        return view('direccions.edit')->with('direccion', $direccion);
    }

    /**
     * Update the specified direccion in storage.
     *
     * @param int $id
     * @param UpdatedireccionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedireccionRequest $request)
    {
        $direccion = $this->direccionRepository->find($id);

        if (empty($direccion)) {
            Flash::error('Direccion no se ha encontrado.');

            return redirect(route('direccions.index'));
        }

        $direccion = $this->direccionRepository->update($request->all(), $id);

        Flash::success('Direccion ha sido modificado correctamente.');

        return redirect(route('direccions.index'));
    }

    /**
     * Remove the specified direccion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $direccion = $this->direccionRepository->find($id);

        if (empty($direccion)) {
            Flash::error('Direccion no se ha encontrado.');

            return redirect(route('direccions.index'));
        }

        $this->direccionRepository->delete($id);

        Flash::success('Direccion ha sido borrado correctamente.');

        return redirect(route('direccions.index'));
    }
}
