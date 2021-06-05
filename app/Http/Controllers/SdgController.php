<?php

namespace App\Http\Controllers;

use App\Models\Sdg;
use Illuminate\Http\Request;

class SdgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sdgs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sdg  $sdg
     * @return \Illuminate\Http\Response
     */
    public function show(Sdg $sdg)
    {
        return view('sdgs.show', compact('sdg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sdg  $sdg
     * @return \Illuminate\Http\Response
     */
    public function edit(Sdg $sdg)
    {
        return view('sdgs.edit', compact('sdg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sdg  $sdg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sdg $sdg)
    {
        $sdg->update($this->getValidate($request));
        return redirect(route('admin.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sdg  $sdg
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sdg $sdg)
    {
        //
    }

    public function getValidate(Request $request)
    {
        return $request->validate([
            'excerpt' => 'required'
        ]);
    }
}
