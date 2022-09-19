<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreaterepartidorRequest;
use App\Http\Requests\UpdaterepartidorRequest;
use App\Repositories\repartidorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class repartidorController extends AppBaseController
{
    /** @var repartidorRepository $repartidorRepository*/
    private $repartidorRepository;

    public function __construct(repartidorRepository $repartidorRepo)
    {
        $this->repartidorRepository = $repartidorRepo;
    }

    /**
     * Display a listing of the repartidor.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $repartidors = $this->repartidorRepository->all();

        return view('repartidors.index')
            ->with('repartidors', $repartidors);
    }

    /**
     * Show the form for creating a new repartidor.
     *
     * @return Response
     */
    public function create()
    {
        return view('repartidors.create');
    }

    /**
     * Store a newly created repartidor in storage.
     *
     * @param CreaterepartidorRequest $request
     *
     * @return Response
     */
    public function store(CreaterepartidorRequest $request)
    {
        $input = $request->all();

        $repartidor = $this->repartidorRepository->create($input);

        Flash::success('Repartidor saved successfully.');

        return redirect(route('repartidors.index'));
    }

    /**
     * Display the specified repartidor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $repartidor = $this->repartidorRepository->find($id);

        if (empty($repartidor)) {
            Flash::error('Repartidor not found');

            return redirect(route('repartidors.index'));
        }

        return view('repartidors.show')->with('repartidor', $repartidor);
    }

    /**
     * Show the form for editing the specified repartidor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $repartidor = $this->repartidorRepository->find($id);

        if (empty($repartidor)) {
            Flash::error('Repartidor not found');

            return redirect(route('repartidors.index'));
        }

        return view('repartidors.edit')->with('repartidor', $repartidor);
    }

    /**
     * Update the specified repartidor in storage.
     *
     * @param int $id
     * @param UpdaterepartidorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterepartidorRequest $request)
    {
        $repartidor = $this->repartidorRepository->find($id);

        if (empty($repartidor)) {
            Flash::error('Repartidor not found');

            return redirect(route('repartidors.index'));
        }

        $repartidor = $this->repartidorRepository->update($request->all(), $id);

        Flash::success('Repartidor updated successfully.');

        return redirect(route('repartidors.index'));
    }

    /**
     * Remove the specified repartidor from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $repartidor = $this->repartidorRepository->find($id);

        if (empty($repartidor)) {
            Flash::error('Repartidor not found');

            return redirect(route('repartidors.index'));
        }

        $this->repartidorRepository->delete($id);

        Flash::success('Repartidor deleted successfully.');

        return redirect(route('repartidors.index'));
    }
}
