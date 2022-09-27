<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createmotivo_ajusteRequest;
use App\Http\Requests\Updatemotivo_ajusteRequest;
use App\Repositories\motivo_ajusteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class motivo_ajusteController extends AppBaseController
{
    /** @var motivo_ajusteRepository $motivoAjusteRepository*/
    private $motivoAjusteRepository;

    public function __construct(motivo_ajusteRepository $motivoAjusteRepo)
    {
        $this->motivoAjusteRepository = $motivoAjusteRepo;
    }

    /**
     * Display a listing of the motivo_ajuste.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $motivoAjustes = $this->motivoAjusteRepository->all();

        return view('motivo_ajustes.index')
            ->with('motivoAjustes', $motivoAjustes);
    }

    /**
     * Show the form for creating a new motivo_ajuste.
     *
     * @return Response
     */
    public function create()
    {
        return view('motivo_ajustes.create');
    }

    /**
     * Store a newly created motivo_ajuste in storage.
     *
     * @param Createmotivo_ajusteRequest $request
     *
     * @return Response
     */
    public function store(Createmotivo_ajusteRequest $request)
    {
        $input = $request->all();

        $motivoAjuste = $this->motivoAjusteRepository->create($input);

        Flash::success('Motivo Ajuste ha sido guardado correctamente.');

        return redirect(route('motivoAjustes.index'));
    }

    /**
     * Display the specified motivo_ajuste.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $motivoAjuste = $this->motivoAjusteRepository->find($id);

        if (empty($motivoAjuste)) {
            Flash::error('Motivo Ajuste no se ha encontrado.');

            return redirect(route('motivoAjustes.index'));
        }

        return view('motivo_ajustes.show')->with('motivoAjuste', $motivoAjuste);
    }

    /**
     * Show the form for editing the specified motivo_ajuste.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $motivoAjuste = $this->motivoAjusteRepository->find($id);

        if (empty($motivoAjuste)) {
            Flash::error('Motivo Ajuste no se ha encontrado.');

            return redirect(route('motivoAjustes.index'));
        }

        return view('motivo_ajustes.edit')->with('motivoAjuste', $motivoAjuste);
    }

    /**
     * Update the specified motivo_ajuste in storage.
     *
     * @param int $id
     * @param Updatemotivo_ajusteRequest $request
     *
     * @return Response
     */
    public function update($id, Updatemotivo_ajusteRequest $request)
    {
        $motivoAjuste = $this->motivoAjusteRepository->find($id);

        if (empty($motivoAjuste)) {
            Flash::error('Motivo Ajuste no se ha encontrado.');

            return redirect(route('motivoAjustes.index'));
        }

        $motivoAjuste = $this->motivoAjusteRepository->update($request->all(), $id);

        Flash::success('Motivo Ajuste ha sido modificado correctamente.');

        return redirect(route('motivoAjustes.index'));
    }

    /**
     * Remove the specified motivo_ajuste from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $motivoAjuste = $this->motivoAjusteRepository->find($id);

        if (empty($motivoAjuste)) {
            Flash::error('Motivo Ajuste no se ha encontrado.');

            return redirect(route('motivoAjustes.index'));
        }

        $this->motivoAjusteRepository->delete($id);

        Flash::success('Motivo Ajuste ha sido borrado correctamente.');

        return redirect(route('motivoAjustes.index'));
    }
}
