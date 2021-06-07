<?php

namespace App\Http\Controllers;

use App\Models\ResearchGroup;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class ResearchGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin-access');
        return view('researchGroups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     * @throws AuthorizationException
     */
    public function store(Request $request)
    {
        $this->authorize('admin-access');
        ResearchGroup::create($this->getValidate($request));
        return redirect(route('admin.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param ResearchGroup $researchGroup
     * @return void
     */
    public function show(ResearchGroup $researchGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ResearchGroup $researchGroup
     * @return Application|Factory|View
     * @throws AuthorizationException
     */
    public function edit(ResearchGroup $researchGroup)
    {
        $this->authorize('admin-access');

        return view('researchGroups.edit', compact('researchGroup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param ResearchGroup $researchGroup
     * @return Application|Redirector|RedirectResponse
     * @throws AuthorizationException
     */
    public function update(Request $request, ResearchGroup $researchGroup)
    {
        $this->authorize('admin-access');
        $researchGroup->update($this->getValidate($request));
        return redirect(route('admin.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ResearchGroup $researchGroup
     * @return Application|Redirector|RedirectResponse
     * @throws AuthorizationException
     * @throws Exception
     */
    public function destroy(ResearchGroup $researchGroup)
    {
        $this->authorize('admin-access');
        $researchGroup->delete();
        return redirect(route('admin.index'));
    }

    /**
     * Validate the request
     * @param Request $request
     * @return array
     */
    public function getValidate(Request $request): array
    {
        return $request->validate([
            'name' => 'required'
        ]);
    }
}
