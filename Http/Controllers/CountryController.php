<?php

namespace Modules\Country\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Country\Repositories\Contracts\CountryRepositoryInterface;



class CountryController extends \Modules\Core\Http\Controllers\Controller
{

    /**
     * @var Countries
     */
    /**
     * @var CountryRepositoryInterface
     */
    private $countryRepository;

    /**
     * CountryController constructor.
     */
    public function __construct(CountryRepositoryInterface $countryRepository)
    {

        $this->countryRepository = $countryRepository;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        $countries = $this->genPagination($request, $this->countryRepository);
        $countries->withPath(config('path_pagination'));
        return view('country::countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('country::countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('country::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
//        $country = $this->countryRepository->getCountryById($id);
//
//        return view('country::countries.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $country = $this->countryRepository->updateActive($id);

        return redirect()->route('countries.index')
            ->with(config('core.session_success'), _t('message_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->countryRepository->deleteById($id);

        return redirect()->route('countries.index')->with(config('core.session_success'), _t('message_delete'));
    }
}
