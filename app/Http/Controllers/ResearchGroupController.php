<?php

namespace App\Http\Controllers;

use App\Models\ResearchGroup;
use Illuminate\Http\Request;

class ResearchGroupController extends Controller
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
     *
     */
    public function create()
    {
        return view('researchGroup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ResearchGroup::create($this->validateResearchGroup($request));

        return redirect("/admin");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResearchGroup  $researchGroup
     * @return \Illuminate\Http\Response
     */
    public function show(ResearchGroup $researchGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResearchGroup  $researchGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(ResearchGroup $researchGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResearchGroup  $researchGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResearchGroup $researchGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResearchGroup  $researchGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResearchGroup $researchGroup)
    {
        //
    }

    public function validateResearchGroup($request)
    {

        return $request->validate([
            'name' => 'required'
        ]);
    }
}
