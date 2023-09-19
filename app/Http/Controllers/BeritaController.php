<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use App\Repositories\BeritaRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Flash;
use Laracasts\Flash\Flash as FlashFlash;
use Response;

class BeritaController extends AppBaseController
{
    /** @var BeritaRepository $beritaRepository*/
    private $beritaRepository;

    public function __construct(BeritaRepository $beritaRepo)
    {
        $this->beritaRepository = $beritaRepo;
    }

    /**
     * Display a listing of the Berita.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $beritas = $this->beritaRepository->all();

        return view('beritas.index')
            ->with('beritas', $beritas);
    }

    /**
     * Show the form for creating a new Berita.
     *
     * @return Response
     */
    public function create()
    {
        return view('beritas.create');
    }

    /**
     * Store a newly created Berita in storage.
     *
     * @param CreateBeritaRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $date = date('d-m-y');
        $i=1;

        $berita = new Berita();
        $berita->tittle = $request->tittle;
        $berita->desc = $request->desc;
        $berita->slug = Str::slug($request->tittle, '-');

        // function file upload
        if ($request->has('thumbnail')){
            $thumbnail = $request->file('thumbnail');
            $filename = $date.'-'.$thumbnail->getClientOriginalName();
            $ext = $thumbnail->getClientOriginalExtension();
            $destinationPath = 'storage/blogs';
            $berita->thumbnail = $thumbnail->move($destinationPath,$thumbnail->getClientOriginalName());
            $berita->save();
        }

        $berita->save();
        FlashFlash::success('Berita saved successfully.');

        return redirect(route('beritas.index'));
    }

    /**
     * Display the specified Berita.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $berita = $this->beritaRepository->find($id);

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('beritas.index'));
        }

        return view('beritas.show')->with('berita', $berita);
    }

    /**
     * Show the form for editing the specified Berita.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $berita = $this->beritaRepository->find($id);

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('beritas.index'));
        }

        return view('beritas.edit')->with('berita', $berita);
    }

    /**
     * Update the specified Berita in storage.
     *
     * @param int $id
     * @param UpdateBeritaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBeritaRequest $request)
    {
        $beritas = $this->beritaRepository->find($id);

        if (empty($beritas)) {
            FlashFlash::error('Berita not found');

            return redirect(route('beritas.index'));
        }

        $date = date('d-m-y');

        $berita = Berita::find($id);
       
        if ($request->has('thumbnail')){
            $thumbnail = $request->file('thumbnail');
            $filename = $date.'-'.$thumbnail->getClientOriginalName();
            $ext = $thumbnail->getClientOriginalExtension();
            $destinationPath = 'storage/blogs';
            $berita->thumbnail = $thumbnail->move($destinationPath,$thumbnail->getClientOriginalName());
            $berita->update();
        }

        $berita->tittle = $request->input('tittle');
        $berita->desc = $request->input('desc');
        $berita->slug = Str::slug($request->tittle, '-');
        $berita->update();

        FlashFlash::success('Berita updated successfully.');

        return redirect(route('beritas.index'));
    }

    /**
     * Remove the specified Berita from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $berita = $this->beritaRepository->find($id);

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('beritas.index'));
        }

        $this->beritaRepository->delete($id);

        Flash::success('Berita deleted successfully.');

        return redirect(route('beritas.index'));
    }
}
