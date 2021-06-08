<?php

namespace App\Http\Controllers;

use App\Models\BusinessOperation;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class BusinessOperationController extends Controller
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
        return view('businessOperations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        BusinessOperation::create($this->getValidate($request));
        return redirect(route('admin.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param BusinessOperation $businessOperation
     * @return void
     */
    public function show(BusinessOperation $businessOperation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param BusinessOperation $businessOperation
     * @return Application|Factory|View
     */
    public function edit(BusinessOperation $businessOperation)
    {
        return view('businessOperations.edit', compact('businessOperation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param BusinessOperation $businessOperation
     * @return Application|Redirector|RedirectResponse
     */
    public function update(Request $request, BusinessOperation $businessOperation)
    {
        $businessOperation->update($this->getValidate($request));
        return redirect(route('admin.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param BusinessOperation $businessOperation
     * @return Application|Redirector|RedirectResponse
     * @throws Exception
     */
    public function destroy(BusinessOperation $businessOperation)
    {
        $businessOperation->delete();
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
