<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class ActivityController extends Controller
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
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        Activity::create($this->getValidate($request));
        return redirect(route('admin.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Activity $activity
     * @return void
     */
    public function show(Activity $activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Activity $activity
     * @return Application|Factory|View
     */
    public function edit(Activity $activity)
    {
        return view('activities.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Activity $activity
     * @return Application|Redirector|RedirectResponse
     */
    public function update(Request $request, Activity $activity)
    {
        $activity->update($this->getValidate($request));
        return redirect(route('admin.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Activity $activity
     * @return Application|Redirector|RedirectResponse
     * @throws Exception
     */
    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect(route('admin.index'));
    }

    public function getValidate(Request $request): array
    {
        return $request->validate([
            'name' => 'required'
        ]);
    }
}
