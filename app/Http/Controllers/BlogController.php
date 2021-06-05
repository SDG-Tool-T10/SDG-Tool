<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Blog;
use App\Models\BusinessOperation;
use App\Models\Program;
use App\Models\ResearchGroup;
use App\Models\Sdg;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sdgs = Sdg::latest()->get();
        $research_groups = ResearchGroup::latest()->get();
        $activities = Activity::latest()->get();
        $business_operations = BusinessOperation::latest()->get();
        $programs = Program::latest()->get();
        $blogs = Blog::where('visibility', true)->get();

        return view('blogs.index', compact(
            'activities',
            'blogs',
            'business_operations',
            'programs',
            'sdgs'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sdgs = Sdg::latest()->get();
        $activities = Activity::latest()->get();
        $business_operations = BusinessOperation::latest()->get();
        $programs = Program::latest()->get();
        $research_groups = ResearchGroup::latest()->get();

        return view('blogs.create', compact('sdgs', 'activities', 'business_operations', 'research_groups', 'programs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Blog $blog, Request $request)
    {
        $blog = Blog::create($this->getValidate($request));
        $blog->sdgs()->attach(request('sdg_id'));
        return redirect(route('admin.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $sdgs = Sdg::latest()->get();
        $activities = Activity::latest()->get();
        $business_operations = BusinessOperation::latest()->get();
        $programs = Program::latest()->get();
        $research_groups = ResearchGroup::latest()->get();

        return view('blogs.edit', compact('programs', 'sdgs', 'activities', 'business_operations', 'research_groups', 'blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->update($this->getValidate($request));
        return redirect(route('admin.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->sdgs()->detach();
        $blog->delete();
        return redirect(route('admin.index'));
    }

    /**
     * Validate the request
     * @return array
     */
    protected function getValidate($request)
    {
        return $request->validate([
            'program_id' => 'nullable | integer',
            'business_operation_id' => 'nullable | integer',
            'research_group_id' => 'nullable | integer',
            'activity_id' => 'required | integer',
            'title' => 'required | max:255',
            'description' => 'required | max:255',
            'impact' => 'required | max:255',
            'link' => 'required | max:255',
            'contact_name' => 'required | max:255',
            'contact_email' => 'required | email:rfc,dns'
        ]);
    }

    /**
     * Change the boolean to true in the database, then the non admin user will be able to see it
     * @param Blog $blog
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    protected function changeVisibility(Blog $blog)
    {
        $blog->update(['visibility' => true]);
        $blog->save();

        return redirect(route('admin.index'));
    }
}
