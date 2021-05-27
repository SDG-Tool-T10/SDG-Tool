<?php

namespace App\Http\Controllers;

use App\Models\BusinessOperation;
use Illuminate\Http\Request;

class BusinessOperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('businessOperations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BusinessOperation::create($this->getValidate($request));

        return redirect(route('admin.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusinessOperation  $businessOperation
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessOperation $businessOperation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusinessOperation  $businessOperation
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessOperation $businessOperation)
    {
        return view('businessOperations.edit', compact('businessOperation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BusinessOperation  $businessOperation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusinessOperation $businessOperation)
    {
        $businessOperation->update($this->getValidate($request));
        return redirect(route('admin.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusinessOperation  $businessOperation
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessOperation $businessOperation)
    {
        $businessOperation->delete();
        return redirect(route('admin.index'));
    }

    public function getValidate(Request $request)
    {
        return $request->validate([
            'name' => 'required'
        ]);
    }
}
