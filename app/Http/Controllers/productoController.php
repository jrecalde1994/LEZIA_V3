<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproductoRequest;
use App\Http\Requests\UpdateproductoRequest;
use App\Repositories\productoRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\deposito;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\categoria;

class productoController extends AppBaseController
{
    /** @var productoRepository $productoRepository*/
    private $productoRepository;

    public function __construct(productoRepository $productoRepo)
    {
        $this->productoRepository = $productoRepo;
    }

    /**
     * Display a listing of the producto.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $productos = $this->productoRepository->all();

        return view('productos.index')
            ->with('productos', $productos);
    }

    /**
     * Show the form for creating a new producto.
     *
     * @return Response
     */
    public function create()
    {
        $deposito = deposito::pluck('nombre_deposito', 'id');
        $categoria = categoria::pluck('nombre_categoria', 'id');
        return view('productos.create',compact('deposito','categoria'));
    }

    /**
     * Store a newly created producto in storage.
     *
     * @param CreateproductoRequest $request
     *
     * @return Response
     */
    public function store(CreateproductoRequest $request)
    {
        $input = $request->all();

        $producto = $this->productoRepository->create($input);

        Flash::success('Guardado correctamente.');

        return redirect(route('productos.index'));
    }

    /**
     * Display the specified producto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Dato no encontrado');

            return redirect(route('productos.index'));
        }

        return view('productos.show')->with('producto', $producto);
    }

    /**
     * Show the form for editing the specified producto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $producto = $this->productoRepository->find($id);

        $deposito = deposito::where('id',$producto->idDeposito)->pluck('nombre_deposito','id');
        $categoria = categoria::where('id',$producto->idCategoria)->pluck('nombre_categoria','id');


        if (empty($producto)) {
            Flash::error('Dato no encontrado');

            return redirect(route('productos.index'));
        }

        return view('productos.edit',compact('deposito','categoria'))->with('producto', $producto);
    }

    /**
     * Update the specified producto in storage.
     *
     * @param int $id
     * @param UpdateproductoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproductoRequest $request)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Dato no encontrado');

            return redirect(route('productos.index'));
        }

        $producto = $this->productoRepository->update($request->all(), $id);

        Flash::success('Actualizado correctamente.');

        return redirect(route('productos.index'));
    }

    /**
     * Remove the specified producto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Dato no encontrado');

            return redirect(route('productos.index'));
        }

        $this->productoRepository->delete($id);

        Flash::success('Eliminado correctamente.');

        return redirect(route('productos.index'));
    }
}
