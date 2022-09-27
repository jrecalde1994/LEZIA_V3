<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateentregaRequest;
use App\Http\Requests\UpdateentregaRequest;
use App\Repositories\entregaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class entregaController extends AppBaseController
{
    /** @var entregaRepository $entregaRepository*/
    private $entregaRepository;

    public function __construct(entregaRepository $entregaRepo)
    {
        $this->entregaRepository = $entregaRepo;
    }

    /**
     * Display a listing of the entrega.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $entregas = $this->entregaRepository->all();

        return view('entregas.index')
            ->with('entregas', $entregas);
    }

    /**
     * Show the form for creating a new entrega.
     *
     * @return Response
     */
    public function create()
    {
        return view('entregas.create');
    }

    /**
     * Store a newly created entrega in storage.
     *
     * @param CreateentregaRequest $request
     *
     * @return Response
     */
    public function store(CreateentregaRequest $request)
    {
        $input = $request->all();

        $entrega = $this->entregaRepository->create($input);

        Flash::success('Entrega ha sido guardado correctamente.');

        return redirect(route('entregas.index'));
    }

    /**
     * Display the specified entrega.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $entrega = $this->entregaRepository->find($id);

        if (empty($entrega)) {
            Flash::error('Entrega no se ha encontrado.');

            return redirect(route('entregas.index'));
        }

        return view('entregas.show')->with('entrega', $entrega);
    }

    /**
     * Show the form for editing the specified entrega.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $entrega = $this->entregaRepository->find($id);

        if (empty($entrega)) {
            Flash::error('Entrega no se ha encontrado.');

            return redirect(route('entregas.index'));
        }

        return view('entregas.edit')->with('entrega', $entrega);
    }

    /**
     * Update the specified entrega in storage.
     *
     * @param int $id
     * @param UpdateentregaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateentregaRequest $request)
    {
        $entrega = $this->entregaRepository->find($id);

        if (empty($entrega)) {
            Flash::error('Entrega no se ha encontrado.');

            return redirect(route('entregas.index'));
        }

        $entrega = $this->entregaRepository->update($request->all(), $id);

        Flash::success('Entrega ha sido modificado correctamente.');

        return redirect(route('entregas.index'));
    }

    /**
     * Remove the specified entrega from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $entrega = $this->entregaRepository->find($id);

        if (empty($entrega)) {
            Flash::error('Entrega no se ha encontrado.');

            return redirect(route('entregas.index'));
        }

        $this->entregaRepository->delete($id);

        Flash::success('Entrega ha sido borrado correctamente.');

        return redirect(route('entregas.index'));
    }
}
