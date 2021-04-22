<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('programs.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Program::create($this->getValidate($request));

        return redirect(route('admin.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Program $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Program $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        return view('programs.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        $program->update($this->getValidate($request));
        return redirect(route('admin.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Program $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        $program->delete();
        return redirect(route('admin.index'));
    }

    public function getValidate($request)
    {
        return $request->validate([
            'name' => 'required'
        ]);
    }
}
