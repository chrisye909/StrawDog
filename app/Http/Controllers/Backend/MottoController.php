<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\CreateMottoRequest;
use App\Http\Requests\UpdateMottoRequest;
use App\Repositories\MottoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MottoController extends AppBaseController
{
    /** @var  MottoRepository */
    private $mottoRepository;

    public function __construct(MottoRepository $mottoRepo)
    {
        $this->mottoRepository = $mottoRepo;
    }

    /**
     * Display a listing of the Motto.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->mottoRepository->pushCriteria(new RequestCriteria($request));
        $mottoes = $this->mottoRepository->all();

        return view('backend.mottoes.index')
            ->with('mottoes', $mottoes);
    }

    /**
     * Show the form for creating a new Motto.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.mottoes.create');
    }

    /**
     * Store a newly created Motto in storage.
     *
     * @param CreateMottoRequest $request
     *
     * @return Response
     */
    public function store(CreateMottoRequest $request)
    {
        $input = $request->all();

        $motto = $this->mottoRepository->create($input);

        Flash::success('Motto saved successfully.');

        return redirect(route('backend.mottoes.index'));
    }

    /**
     * Display the specified Motto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $motto = $this->mottoRepository->findWithoutFail($id);

        if (empty($motto)) {
            Flash::error('Motto not found');

            return redirect(route('backend.mottoes.index'));
        }

        return view('backend.mottoes.show')->with('motto', $motto);
    }

    /**
     * Show the form for editing the specified Motto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $motto = $this->mottoRepository->findWithoutFail($id);

        if (empty($motto)) {
            Flash::error('Motto not found');

            return redirect(route('backend.mottoes.index'));
        }

        return view('backend.mottoes.edit')->with('motto', $motto);
    }

    /**
     * Update the specified Motto in storage.
     *
     * @param  int              $id
     * @param UpdateMottoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMottoRequest $request)
    {
        $motto = $this->mottoRepository->findWithoutFail($id);

        if (empty($motto)) {
            Flash::error('Motto not found');

            return redirect(route('backend.mottoes.index'));
        }

        $motto = $this->mottoRepository->update($request->all(), $id);

        Flash::success('Motto updated successfully.');

        return redirect(route('backend.mottoes.index'));
    }

    /**
     * Remove the specified Motto from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $motto = $this->mottoRepository->findWithoutFail($id);

        if (empty($motto)) {
            Flash::error('Motto not found');

            return redirect(route('backend.mottoes.index'));
        }

        $this->mottoRepository->delete($id);

        Flash::success('Motto deleted successfully.');

        return redirect(route('backend.mottoes.index'));
    }
}
