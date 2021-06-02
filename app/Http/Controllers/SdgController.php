<?php

namespace App\Http\Controllers;

use App\Models\Sdg;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class SdgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('sdgs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Sdg $sdg
     * @return Application|Factory|View
     */
    public function show(Sdg $sdg)
    {
        return view('sdgs.show', compact('sdg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Sdg $sdg
     * @return Application|Factory|View
     */
    public function edit(Sdg $sdg)
    {
        return view('sdgs.edit', compact('sdg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Sdg $sdg
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request, Sdg $sdg)
    {
        $sdg->update($this->getValidate($request));
        return redirect(route('admin.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Sdg $sdg
     * @return void
     */
    public function destroy(Sdg $sdg)
    {
        //
    }

    /**
     * Validate the request
     * @param Request $request
     * @return array
     */
    public function getValidate(Request $request): array
    {
        return $request->validate([
            'excerpt' => 'required'
        ]);
    }
}
