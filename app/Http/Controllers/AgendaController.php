<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAgendaRequest;
use App\Http\Requests\UpdateAgendaRequest;
use App\Repositories\AgendaRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Agenda;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Str;
use Laracasts\Flash\Flash as FlashFlash;
use Response;

class AgendaController extends AppBaseController
{
    /** @var AgendaRepository $agendaRepository*/
    private $agendaRepository;

    public function __construct(AgendaRepository $agendaRepo)
    {
        $this->agendaRepository = $agendaRepo;
    }

    /**
     * Display a listing of the Agenda.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $agendas = Agenda::orderBy('created_at', 'desc')->get();

        return view('agendas.index')
            ->with('agendas', $agendas);
    }

    /**
     * Show the form for creating a new Agenda.
     *
     * @return Response
     */
    public function create()
    {
        return view('agendas.create');
    }

    /**
     * Store a newly created Agenda in storage.
     *
     * @param CreateAgendaRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $agenda = new Agenda();
        $agenda->tittle = $request->input('tittle');
        $agenda->desc = $request->input('desc');
        $agenda->location = $request->input('location');
        $agenda->quota = $request->input('quota');
        $agenda->gift = $request->input('gift');
        $agenda->date_start = $request->input('date_start');
        $agenda->date_end = $request->input('date_end');
        $agenda->link = $request->input('link');
        $agenda->slug = Str::slug($request->tittle, '-');

        $date = date('d-m-y');
        // function file upload
        if ($request->has('thumbnail')){
            $thumbnail = $request->file('thumbnail');
            $filename = $date.'-'.$thumbnail->getClientOriginalName();
            $ext = $thumbnail->getClientOriginalExtension();
            $destinationPath = 'uploads/';
            $agenda->thumbnail = $thumbnail->move($destinationPath,$thumbnail->getClientOriginalName());
            $agenda->save();
        }

        // dd($agenda);
        $agenda->save();

        FlashFlash::success('Agenda saved successfully.');

        return redirect(route('agendas.index'));
    }

    /**
     * Display the specified Agenda.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $agenda = $this->agendaRepository->find($id);

        if (empty($agenda)) {
            Flash::error('Agenda not found');

            return redirect(route('agendas.index'));
        }

        return view('agendas.show')->with('agenda', $agenda);
    }

    /**
     * Show the form for editing the specified Agenda.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $agenda = $this->agendaRepository->find($id);

        if (empty($agenda)) {
            Flash::error('Agenda not found');

            return redirect(route('agendas.index'));
        }

        return view('agendas.edit')->with('agenda', $agenda);
    }

    /**
     * Update the specified Agenda in storage.
     *
     * @param int $id
     * @param UpdateAgendaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAgendaRequest $request)
    {
        $agenda = $this->agendaRepository->find($id);

        if (empty($agenda)) {
            FlashFlash::error('agenda not found');

            return redirect(route('agenda.index'));
        }

        $date = date('d-m-y');

        $agenda = Agenda::find($id);

        if ($request->has('thumbnail')){
            $thumbnail = $request->file('thumbnail');
            $filename = $date.'-'.$thumbnail->getClientOriginalName();
            $ext = $thumbnail->getClientOriginalExtension();
            $destinationPath = 'storage/events';
            $agenda->thumbnail = $thumbnail->move($destinationPath,$thumbnail->getClientOriginalName());
            $agenda->update();
        }

        $agenda->tittle = $request->input('tittle');
        $agenda->desc = $request->input('desc');
        $agenda->location = $request->input('location');
        $agenda->quota = $request->input('quota');
        $agenda->gift = $request->input('gift');
        $agenda->date_start = $request->input('date_start');
        $agenda->date_end = $request->input('date_end');
        $agenda->link = $request->input('link');
        $agenda->slug = Str::slug($request->tittle, '-');
        $agenda->update();

        FlashFlash::success('Agenda updated successfully.');

        return redirect(route('agendas.index'));

        $agenda = $this->agendaRepository->find($id);
    }

    /**
     * Remove the specified Agenda from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $agenda = $this->agendaRepository->find($id);

        if (empty($agenda)) {
            Flash::error('Agenda not found');

            return redirect(route('agendas.index'));
        }

        $this->agendaRepository->delete($id);

        Flash::success('Agenda deleted successfully.');

        return redirect(route('agendas.index'));
    }
}
