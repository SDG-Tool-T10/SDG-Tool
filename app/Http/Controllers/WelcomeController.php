<?php

namespace App\Http\Controllers;

use App\Models\Sdg;
use App\Models\Welcome;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $sdgs = Sdg::get();
        return view('welcome', compact('sdgs'));
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
     * @param Welcome $welcome
     * @return void
     */
    public function show(Welcome $welcome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Welcome $welcome
     * @return void
     */
    public function edit(Welcome $welcome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Welcome $welcome
     * @return void
     */
    public function update(Request $request, Welcome $welcome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Welcome $welcome
     * @return void
     */
    public function destroy(Welcome $welcome)
    {
        //
    }
}
