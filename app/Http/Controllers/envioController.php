<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateenvioRequest;
use App\Http\Requests\UpdateenvioRequest;
use App\Repositories\envioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class envioController extends AppBaseController
{
    /** @var envioRepository $envioRepository*/
    private $envioRepository;

    public function __construct(envioRepository $envioRepo)
    {
        $this->envioRepository = $envioRepo;
    }

    /**
     * Display a listing of the envio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $envios = $this->envioRepository->all();

        return view('envios.index')
            ->with('envios', $envios);
    }

    /**
     * Show the form for creating a new envio.
     *
     * @return Response
     */
    public function create()
    {
        return view('envios.create');
    }

    /**
     * Store a newly created envio in storage.
     *
     * @param CreateenvioRequest $request
     *
     * @return Response
     */
    public function store(CreateenvioRequest $request)
    {
        $input = $request->all();

        $envio = $this->envioRepository->create($input);

        Flash::success('Envio saved successfully.');

        return redirect(route('envios.index'));
    }

    /**
     * Display the specified envio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $envio = $this->envioRepository->find($id);

        if (empty($envio)) {
            Flash::error('Envio not found');

            return redirect(route('envios.index'));
        }

        return view('envios.show')->with('envio', $envio);
    }

    /**
     * Show the form for editing the specified envio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $envio = $this->envioRepository->find($id);

        if (empty($envio)) {
            Flash::error('Envio not found');

            return redirect(route('envios.index'));
        }

        return view('envios.edit')->with('envio', $envio);
    }

    /**
     * Update the specified envio in storage.
     *
     * @param int $id
     * @param UpdateenvioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateenvioRequest $request)
    {
        $envio = $this->envioRepository->find($id);

        if (empty($envio)) {
            Flash::error('Envio not found');

            return redirect(route('envios.index'));
        }

        $envio = $this->envioRepository->update($request->all(), $id);

        Flash::success('Envio updated successfully.');

        return redirect(route('envios.index'));
    }

    /**
     * Remove the specified envio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $envio = $this->envioRepository->find($id);

        if (empty($envio)) {
            Flash::error('Envio not found');

            return redirect(route('envios.index'));
        }

        $this->envioRepository->delete($id);

        Flash::success('Envio deleted successfully.');

        return redirect(route('envios.index'));
    }
}
