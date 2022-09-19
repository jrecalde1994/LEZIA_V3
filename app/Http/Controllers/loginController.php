<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateloginRequest;
use App\Http\Requests\UpdateloginRequest;
use App\Repositories\loginRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class loginController extends AppBaseController
{
    /** @var loginRepository $loginRepository*/
    private $loginRepository;

    public function __construct(loginRepository $loginRepo)
    {
        $this->loginRepository = $loginRepo;
    }

    /**
     * Display a listing of the login.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $logins = $this->loginRepository->all();

        return view('logins.index')
            ->with('logins', $logins);
    }

    /**
     * Show the form for creating a new login.
     *
     * @return Response
     */
    public function create()
    {
        return view('logins.create');
    }

    /**
     * Store a newly created login in storage.
     *
     * @param CreateloginRequest $request
     *
     * @return Response
     */
    public function store(CreateloginRequest $request)
    {
        $input = $request->all();

        $login = $this->loginRepository->create($input);

        Flash::success('Login guardado correctamente.');

        return redirect(route('logins.index'));
    }

    /**
     * Display the specified login.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $login = $this->loginRepository->find($id);

        if (empty($login)) {
            Flash::error('No se encontró el dato');

            return redirect(route('logins.index'));
        }

        return view('logins.show')->with('login', $login);
    }

    /**
     * Show the form for editing the specified login.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $login = $this->loginRepository->find($id);

        if (empty($login)) {
            Flash::error('No se encontró el dato');

            return redirect(route('logins.index'));
        }

        return view('logins.edit')->with('login', $login);
    }

    /**
     * Update the specified login in storage.
     *
     * @param int $id
     * @param UpdateloginRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateloginRequest $request)
    {
        $login = $this->loginRepository->find($id);

        if (empty($login)) {
            Flash::error('No se encontró el dato');

            return redirect(route('logins.index'));
        }

        $login = $this->loginRepository->update($request->all(), $id);

        Flash::success('Login actualizado correctamente.');

        return redirect(route('logins.index'));
    }

    /**
     * Remove the specified login from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $login = $this->loginRepository->find($id);

        if (empty($login)) {
            Flash::error('No se encontró el dato');

            return redirect(route('logins.index'));
        }

        $this->loginRepository->delete($id);

        Flash::success('Login eliminado exitosamente.');

        return redirect(route('logins.index'));
    }
}
