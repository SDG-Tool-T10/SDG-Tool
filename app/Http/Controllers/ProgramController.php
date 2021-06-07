<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     * @throws AuthorizationException
     */
    public function index()
    {
        $this->authorize('admin-access');
        return view('programs.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     * @throws AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin-access');
        return view('programs.create');
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
        Program::create($this->getValidate($request));
        return redirect(route('admin.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Program $program
     * @return void
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Program $program
     * @return Application|Factory|View
     * @throws AuthorizationException
     */
    public function edit(Program $program)
    {
        $this->authorize('admin-access');
        return view('programs.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Program $program
     * @return Application|Redirector|RedirectResponse
     * @throws AuthorizationException
     */
    public function update(Request $request, Program $program)
    {
        $this->authorize('admin-access');
        $program->update($this->getValidate($request));
        return redirect(route('admin.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Program $program
     * @return Application|Redirector|RedirectResponse
     * @throws AuthorizationException
     * @throws Exception
     */
    public function destroy(Program $program)
    {
        $this->authorize('admin-access');
        $program->delete();
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
