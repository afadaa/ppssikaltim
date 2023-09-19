<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLayananRequest;
use App\Http\Requests\UpdateLayananRequest;
use App\Repositories\LayananRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Str;

class LayananController extends AppBaseController
{
    /** @var LayananRepository $layananRepository*/
    private $layananRepository;

    public function __construct(LayananRepository $layananRepo)
    {
        $this->layananRepository = $layananRepo;
    }

    /**
     * Display a listing of the Layanan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $layanans = $this->layananRepository->all();

        return view('layanans.index')
            ->with('layanans', $layanans);
    }

    /**
     * Show the form for creating a new Layanan.
     *
     * @return Response
     */
    public function create()
    {
        return view('layanans.create');
    }

    /**
     * Store a newly created Layanan in storage.
     *
     * @param CreateLayananRequest $request
     *
     * @return Response
     */
    public function store(CreateLayananRequest $request)
    {
        $date = date('d-m-y');
        $i=1;

        $layanan = new Layanan();
        $layanan->tittle = $request->tittle;
        $layanan->desc = $request->desc;
        $layanan->categories = $request->input('categories');
        $layanan->slug = Str::slug($request->tittle, '-');

        // function file upload
        if ($request->has('thumbnail')){
            $thumbnail = $request->file('thumbnail');
            $filename = $date.'-'.$thumbnail->getClientOriginalName();
            $ext = $thumbnail->getClientOriginalExtension();
            $destinationPath = 'layanans';
            $layanan->thumbnail = $thumbnail->move($destinationPath,$thumbnail->getClientOriginalName());
            $layanan->save();
        }

        $layanan->save();

        Flash::success('Layanan saved successfully.');

        return redirect(route('layanans.index'));
    }

    /**
     * Display the specified Layanan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $layanan = $this->layananRepository->find($id);

        if (empty($layanan)) {
            Flash::error('Layanan not found');

            return redirect(route('layanans.index'));
        }

        return view('layanans.show')->with('layanan', $layanan);
    }

    /**
     * Show the form for editing the specified Layanan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $layanan = $this->layananRepository->find($id);

        if (empty($layanan)) {
            Flash::error('Layanan not found');

            return redirect(route('layanans.index'));
        }

        return view('layanans.edit')->with('layanan', $layanan);
    }

    /**
     * Update the specified Layanan in storage.
     *
     * @param int $id
     * @param UpdateLayananRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLayananRequest $request)
    {
        $layanan = $this->layananRepository->find($id);

        if (empty($layanan)) {
            Flash::error('Layanan not found');

            return redirect(route('layanans.index'));
        }

        $date = date('d-m-y');

        if ($request->has('thumbnail')){
            $thumbnail = $request->file('thumbnail');
            $filename = $date.'-'.$thumbnail->getClientOriginalName();
            $ext = $thumbnail->getClientOriginalExtension();
            $destinationPath = 'blogs';
            $layanan->thumbnail = $thumbnail->move($destinationPath,$thumbnail->getClientOriginalName());
            $layanan->update();
        }

        $layanan->tittle = $request->input('tittle');
        $layanan->desc = $request->input('desc');
        $layanan->categories = $request->input('categories');
        $layanan->slug = Str::slug($request->tittle, '-');
        $layanan->update();

        Flash::success('Layanan updated successfully.');

        return redirect(route('layanans.index'));
    }

    /**
     * Remove the specified Layanan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $layanan = $this->layananRepository->find($id);

        if (empty($layanan)) {
            Flash::error('Layanan not found');

            return redirect(route('layanans.index'));
        }

        $this->layananRepository->delete($id);

        Flash::success('Layanan deleted successfully.');

        return redirect(route('layanans.index'));
    }
}
