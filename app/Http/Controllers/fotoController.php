<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatefotoRequest;
use App\Http\Requests\UpdatefotoRequest;
use App\Repositories\fotoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class fotoController extends AppBaseController
{
    /** @var fotoRepository $fotoRepository*/
    private $fotoRepository;

    public function __construct(fotoRepository $fotoRepo)
    {
        $this->fotoRepository = $fotoRepo;
    }

    /**
     * Display a listing of the foto.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $fotos = $this->fotoRepository->all();

        return view('fotos.index')
            ->with('fotos', $fotos);
    }

    /**
     * Show the form for creating a new foto.
     *
     * @return Response
     */
    public function create()
    {
        return view('fotos.create');
    }

    /**
     * Store a newly created foto in storage.
     *
     * @param CreatefotoRequest $request
     *
     * @return Response
     */
    public function store(CreatefotoRequest $request)
    {
        $input = $request->all();

        $foto = $this->fotoRepository->create($input);

        Flash::success('Foto ha sido guardado correctamente.');

        return redirect(route('fotos.index'));
    }

    /**
     * Display the specified foto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $foto = $this->fotoRepository->find($id);

        if (empty($foto)) {
            Flash::error('Foto no se ha encontrado.');

            return redirect(route('fotos.index'));
        }

        return view('fotos.show')->with('foto', $foto);
    }

    /**
     * Show the form for editing the specified foto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $foto = $this->fotoRepository->find($id);

        if (empty($foto)) {
            Flash::error('Foto no se ha encontrado.');

            return redirect(route('fotos.index'));
        }

        return view('fotos.edit')->with('foto', $foto);
    }

    /**
     * Update the specified foto in storage.
     *
     * @param int $id
     * @param UpdatefotoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatefotoRequest $request)
    {
        $foto = $this->fotoRepository->find($id);

        if (empty($foto)) {
            Flash::error('Foto no se ha encontrado.');

            return redirect(route('fotos.index'));
        }

        $foto = $this->fotoRepository->update($request->all(), $id);

        Flash::success('Foto ha sido modificado correctamente.');

        return redirect(route('fotos.index'));
    }

    /**
     * Remove the specified foto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $foto = $this->fotoRepository->find($id);

        if (empty($foto)) {
            Flash::error('Foto no se ha encontrado.');

            return redirect(route('fotos.index'));
        }

        $this->fotoRepository->delete($id);

        Flash::success('Foto ha sido borrado correctamente.');

        return redirect(route('fotos.index'));
    }
}
