<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetimbradoRequest;
use App\Http\Requests\UpdatetimbradoRequest;
use App\Repositories\timbradoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class timbradoController extends AppBaseController
{
    /** @var timbradoRepository $timbradoRepository*/
    private $timbradoRepository;

    public function __construct(timbradoRepository $timbradoRepo)
    {
        $this->timbradoRepository = $timbradoRepo;
    }

    /**
     * Display a listing of the timbrado.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $timbrados = $this->timbradoRepository->all();

        return view('timbrados.index')
            ->with('timbrados', $timbrados);
    }

    /**
     * Show the form for creating a new timbrado.
     *
     * @return Response
     */
    public function create()
    {
        return view('timbrados.create');
    }

    /**
     * Store a newly created timbrado in storage.
     *
     * @param CreatetimbradoRequest $request
     *
     * @return Response
     */
    public function store(CreatetimbradoRequest $request)
    {
        $input = $request->all();

        $timbrado = $this->timbradoRepository->create($input);

        Flash::success('Timbrado saved successfully.');

        return redirect(route('timbrados.index'));
    }

    /**
     * Display the specified timbrado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $timbrado = $this->timbradoRepository->find($id);

        if (empty($timbrado)) {
            Flash::error('Timbrado not found');

            return redirect(route('timbrados.index'));
        }

        return view('timbrados.show')->with('timbrado', $timbrado);
    }

    /**
     * Show the form for editing the specified timbrado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $timbrado = $this->timbradoRepository->find($id);

        if (empty($timbrado)) {
            Flash::error('Timbrado not found');

            return redirect(route('timbrados.index'));
        }

        return view('timbrados.edit')->with('timbrado', $timbrado);
    }

    /**
     * Update the specified timbrado in storage.
     *
     * @param int $id
     * @param UpdatetimbradoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetimbradoRequest $request)
    {
        $timbrado = $this->timbradoRepository->find($id);

        if (empty($timbrado)) {
            Flash::error('Timbrado not found');

            return redirect(route('timbrados.index'));
        }

        $timbrado = $this->timbradoRepository->update($request->all(), $id);

        Flash::success('Timbrado updated successfully.');

        return redirect(route('timbrados.index'));
    }

    /**
     * Remove the specified timbrado from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $timbrado = $this->timbradoRepository->find($id);

        if (empty($timbrado)) {
            Flash::error('Timbrado not found');

            return redirect(route('timbrados.index'));
        }

        $this->timbradoRepository->delete($id);

        Flash::success('Timbrado deleted successfully.');

        return redirect(route('timbrados.index'));
    }
}
