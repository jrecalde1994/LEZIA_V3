<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatevendedorRequest;
use App\Http\Requests\UpdatevendedorRequest;
use App\Repositories\vendedorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class vendedorController extends AppBaseController
{
    /** @var vendedorRepository $vendedorRepository*/
    private $vendedorRepository;

    public function __construct(vendedorRepository $vendedorRepo)
    {
        $this->vendedorRepository = $vendedorRepo;
    }

    /**
     * Display a listing of the vendedor.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $vendedors = $this->vendedorRepository->all();

        return view('vendedors.index')
            ->with('vendedors', $vendedors);
    }

    /**
     * Show the form for creating a new vendedor.
     *
     * @return Response
     */
    public function create()
    {
        return view('vendedors.create');
    }

    /**
     * Store a newly created vendedor in storage.
     *
     * @param CreatevendedorRequest $request
     *
     * @return Response
     */
    public function store(CreatevendedorRequest $request)
    {
        $input = $request->all();

        $vendedor = $this->vendedorRepository->create($input);

        Flash::success('Vendedor saved successfully.');

        return redirect(route('vendedors.index'));
    }

    /**
     * Display the specified vendedor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vendedor = $this->vendedorRepository->find($id);

        if (empty($vendedor)) {
            Flash::error('Vendedor not found');

            return redirect(route('vendedors.index'));
        }

        return view('vendedors.show')->with('vendedor', $vendedor);
    }

    /**
     * Show the form for editing the specified vendedor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vendedor = $this->vendedorRepository->find($id);

        if (empty($vendedor)) {
            Flash::error('Vendedor not found');

            return redirect(route('vendedors.index'));
        }

        return view('vendedors.edit')->with('vendedor', $vendedor);
    }

    /**
     * Update the specified vendedor in storage.
     *
     * @param int $id
     * @param UpdatevendedorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevendedorRequest $request)
    {
        $vendedor = $this->vendedorRepository->find($id);

        if (empty($vendedor)) {
            Flash::error('Vendedor not found');

            return redirect(route('vendedors.index'));
        }

        $vendedor = $this->vendedorRepository->update($request->all(), $id);

        Flash::success('Vendedor updated successfully.');

        return redirect(route('vendedors.index'));
    }

    /**
     * Remove the specified vendedor from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vendedor = $this->vendedorRepository->find($id);

        if (empty($vendedor)) {
            Flash::error('Vendedor not found');

            return redirect(route('vendedors.index'));
        }

        $this->vendedorRepository->delete($id);

        Flash::success('Vendedor deleted successfully.');

        return redirect(route('vendedors.index'));
    }
}
