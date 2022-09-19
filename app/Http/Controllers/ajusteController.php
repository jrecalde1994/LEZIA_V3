<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateajusteRequest;
use App\Http\Requests\UpdateajusteRequest;
use App\Repositories\ajusteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ajusteController extends AppBaseController
{
    /** @var ajusteRepository $ajusteRepository*/
    private $ajusteRepository;

    public function __construct(ajusteRepository $ajusteRepo)
    {
        $this->ajusteRepository = $ajusteRepo;
    }

    /**
     * Display a listing of the ajuste.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ajustes = $this->ajusteRepository->all();

        return view('ajustes.index')
            ->with('ajustes', $ajustes);
    }

    /**
     * Show the form for creating a new ajuste.
     *
     * @return Response
     */
    public function create()
    {
        return view('ajustes.create');
    }

    /**
     * Store a newly created ajuste in storage.
     *
     * @param CreateajusteRequest $request
     *
     * @return Response
     */
    public function store(CreateajusteRequest $request)
    {
        $input = $request->all();

        $ajuste = $this->ajusteRepository->create($input);

        Flash::success('Ajuste saved successfully.');

        return redirect(route('ajustes.index'));
    }

    /**
     * Display the specified ajuste.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ajuste = $this->ajusteRepository->find($id);

        if (empty($ajuste)) {
            Flash::error('Ajuste not found');

            return redirect(route('ajustes.index'));
        }

        return view('ajustes.show')->with('ajuste', $ajuste);
    }

    /**
     * Show the form for editing the specified ajuste.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ajuste = $this->ajusteRepository->find($id);

        if (empty($ajuste)) {
            Flash::error('Ajuste not found');

            return redirect(route('ajustes.index'));
        }

        return view('ajustes.edit')->with('ajuste', $ajuste);
    }

    /**
     * Update the specified ajuste in storage.
     *
     * @param int $id
     * @param UpdateajusteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateajusteRequest $request)
    {
        $ajuste = $this->ajusteRepository->find($id);

        if (empty($ajuste)) {
            Flash::error('Ajuste not found');

            return redirect(route('ajustes.index'));
        }

        $ajuste = $this->ajusteRepository->update($request->all(), $id);

        Flash::success('Ajuste updated successfully.');

        return redirect(route('ajustes.index'));
    }

    /**
     * Remove the specified ajuste from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ajuste = $this->ajusteRepository->find($id);

        if (empty($ajuste)) {
            Flash::error('Ajuste not found');

            return redirect(route('ajustes.index'));
        }

        $this->ajusteRepository->delete($id);

        Flash::success('Ajuste deleted successfully.');

        return redirect(route('ajustes.index'));
    }
}
