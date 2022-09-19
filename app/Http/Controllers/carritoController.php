<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecarritoRequest;
use App\Http\Requests\UpdatecarritoRequest;
use App\Repositories\carritoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class carritoController extends AppBaseController
{
    /** @var carritoRepository $carritoRepository*/
    private $carritoRepository;

    public function __construct(carritoRepository $carritoRepo)
    {
        $this->carritoRepository = $carritoRepo;
    }

    /**
     * Display a listing of the carrito.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $carritos = $this->carritoRepository->all();

        return view('carritos.index')
            ->with('carritos', $carritos);
    }

    /**
     * Show the form for creating a new carrito.
     *
     * @return Response
     */
    public function create()
    {
        return view('carritos.create');
    }

    /**
     * Store a newly created carrito in storage.
     *
     * @param CreatecarritoRequest $request
     *
     * @return Response
     */
    public function store(CreatecarritoRequest $request)
    {
        $input = $request->all();

        $carrito = $this->carritoRepository->create($input);

        Flash::success('Carrito saved successfully.');

        return redirect(route('carritos.index'));
    }

    /**
     * Display the specified carrito.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $carrito = $this->carritoRepository->find($id);

        if (empty($carrito)) {
            Flash::error('Carrito not found');

            return redirect(route('carritos.index'));
        }

        return view('carritos.show')->with('carrito', $carrito);
    }

    /**
     * Show the form for editing the specified carrito.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $carrito = $this->carritoRepository->find($id);

        if (empty($carrito)) {
            Flash::error('Carrito not found');

            return redirect(route('carritos.index'));
        }

        return view('carritos.edit')->with('carrito', $carrito);
    }

    /**
     * Update the specified carrito in storage.
     *
     * @param int $id
     * @param UpdatecarritoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecarritoRequest $request)
    {
        $carrito = $this->carritoRepository->find($id);

        if (empty($carrito)) {
            Flash::error('Carrito not found');

            return redirect(route('carritos.index'));
        }

        $carrito = $this->carritoRepository->update($request->all(), $id);

        Flash::success('Carrito updated successfully.');

        return redirect(route('carritos.index'));
    }

    /**
     * Remove the specified carrito from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $carrito = $this->carritoRepository->find($id);

        if (empty($carrito)) {
            Flash::error('Carrito not found');

            return redirect(route('carritos.index'));
        }

        $this->carritoRepository->delete($id);

        Flash::success('Carrito deleted successfully.');

        return redirect(route('carritos.index'));
    }
}
