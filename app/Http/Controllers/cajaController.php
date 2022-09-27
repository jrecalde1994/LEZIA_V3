<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecajaRequest;
use App\Http\Requests\UpdatecajaRequest;
use App\Repositories\cajaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Sucursale;

class cajaController extends AppBaseController
{
    /** @var cajaRepository $cajaRepository*/
    private $cajaRepository;

    public function __construct(cajaRepository $cajaRepo)
    {
        $this->cajaRepository = $cajaRepo;
    }

    /**
     * Display a listing of the caja.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cajas = $this->cajaRepository->all();

        return view('cajas.index')
            ->with('cajas', $cajas);
    }

    /**
     * Show the form for creating a new caja.
     *
     * @return Response
     */
    public function create()
    {
        $sucursals = sucursale::pluck('nombre_sucursal', 'id');
        return view('cajas.create',compact('sucursals'));
    }

    /**
     * Store a newly created caja in storage.
     *
     * @param CreatecajaRequest $request
     *
     * @return Response
     */
    public function store(CreatecajaRequest $request)
    {
        $input = $request->all();

        $caja = $this->cajaRepository->create($input);

        Flash::success('Caja ha sido guardado correctamente.');

        return redirect(route('cajas.index'));
    }

    /**
     * Display the specified caja.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $caja = $this->cajaRepository->find($id);



        if (empty($caja)) {
            Flash::error('Caja no se ha encontrado.');

            return redirect(route('cajas.index'));
        }

        return view('cajas.show')->with('caja', $caja);
    }

    /**
     * Show the form for editing the specified caja.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $caja = $this->cajaRepository->find($id);
        
        $sucursals = sucursale::where('id',$caja->idSucursal)->pluck('nombre_sucursal','id');


        if (empty($caja)) {
            Flash::error('Caja no se ha encontrado.');

            return redirect(route('cajas.index'));
        }

        return view('cajas.edit',compact('sucursals'))->with('caja', $caja);
    }

    /**
     * Update the specified caja in storage.
     *
     * @param int $id
     * @param UpdatecajaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecajaRequest $request)
    {
        $caja = $this->cajaRepository->find($id);

        if (empty($caja)) {
            Flash::error('Caja no se ha encontrado.');

            return redirect(route('cajas.index'));
        }

        $caja = $this->cajaRepository->update($request->all(), $id);

        Flash::success('Caja ha sido modificado correctamente.');

        return redirect(route('cajas.index'));
    }

    /**
     * Remove the specified caja from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $caja = $this->cajaRepository->find($id);

        if (empty($caja)) {
            Flash::error('Caja no se ha encontrado.');

            return redirect(route('cajas.index'));
        }

        $this->cajaRepository->delete($id);

        Flash::success('Caja ha sido borrado correctamente.');

        return redirect(route('cajas.index'));
    }
}
