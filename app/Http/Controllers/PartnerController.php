<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use App\Repositories\PartnerRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Partner;
use Illuminate\Http\Request;
use Flash;
use Response;

class PartnerController extends AppBaseController
{
    /** @var PartnerRepository $partnerRepository*/
    private $partnerRepository;

    public function __construct(PartnerRepository $partnerRepo)
    {
        $this->partnerRepository = $partnerRepo;
    }

    /**
     * Display a listing of the Partner.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $partners = $this->partnerRepository->all();

        return view('partners.index')
            ->with('partners', $partners);
    }

    /**
     * Show the form for creating a new Partner.
     *
     * @return Response
     */
    public function create()
    {
        return view('partners.create');
    }

    /**
     * Store a newly created Partner in storage.
     *
     * @param CreatePartnerRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $partner = new Partner();
        $partner->tittle = $request->input('tittle');
        $partner->link = $request->input('link');

        $date = date('d-m-y');
        // function file upload
        if ($request->has('thumbnail')){
            $thumbnail = $request->file('thumbnail');
            $filename = $date.'-'.$thumbnail->getClientOriginalName();
            $ext = $thumbnail->getClientOriginalExtension();
            $destinationPath = 'storage/partners';
            $partner->thumbnail = $thumbnail->move($destinationPath,$thumbnail->getClientOriginalName());
            $partner->save();
        }

        // dd($partner);
        $partner->save();

        Flash::success('Partner saved successfully.');

        return redirect(route('partners.index'));
    }

    /**
     * Display the specified Partner.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $partner = $this->partnerRepository->find($id);

        if (empty($partner)) {
            Flash::error('Partner not found');

            return redirect(route('partners.index'));
        }

        return view('partners.show')->with('partner', $partner);
    }

    /**
     * Show the form for editing the specified Partner.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $partner = $this->partnerRepository->find($id);

        if (empty($partner)) {
            Flash::error('Partner not found');

            return redirect(route('partners.index'));
        }

        return view('partners.edit')->with('partner', $partner);
    }

    /**
     * Update the specified Partner in storage.
     *
     * @param int $id
     * @param UpdatePartnerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePartnerRequest $request)
    {
        $partner = $this->partnerRepository->find($id);

        if (empty($partner)) {
            Flash::error('Partner not found');

            return redirect(route('partners.index'));
        }

        $date = date('d-m-y');

        $partner = Partner::find($id);

        if ($request->has('thumbnail')){
            $thumbnail = $request->file('thumbnail');
            $filename = $date.'-'.$thumbnail->getClientOriginalName();
            $ext = $thumbnail->getClientOriginalExtension();
            $destinationPath = 'storage/partners';
            $partner->thumbnail = $thumbnail->move($destinationPath,$thumbnail->getClientOriginalName());
            $partner->update();
        }

        $partner->tittle = $request->input('tittle');
        $partner->link = $request->input('link');
        $partner->update();
        Flash::success('Partner updated successfully.');

        return redirect(route('partners.index'));
    }

    /**
     * Remove the specified Partner from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $partner = $this->partnerRepository->find($id);

        if (empty($partner)) {
            Flash::error('Partner not found');

            return redirect(route('partners.index'));
        }

        $this->partnerRepository->delete($id);

        Flash::success('Partner deleted successfully.');

        return redirect(route('partners.index'));
    }
}
