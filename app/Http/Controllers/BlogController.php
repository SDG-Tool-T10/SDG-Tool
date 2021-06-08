<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Blog;
use App\Models\BusinessOperation;
use App\Models\Program;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\ResearchGroup;
use App\Models\Sdg;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $activities = Activity::latest()->get();
        $blogs = Blog::where('visibility', true)->get();
        $business_operations = BusinessOperation::latest()->get();
        $programs = Program::latest()->get();
        $research_groups = ResearchGroup::latest()->get();
        $sdgs = Sdg::latest()->get();

        return view('blogs.index', compact(
            'activities',
            'blogs',
            'business_operations',
            'programs',
            'research_groups',
            'sdgs'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $activities = Activity::latest()->get();
        $business_operations = BusinessOperation::latest()->get();
        $programs = Program::latest()->get();
        $research_groups = ResearchGroup::latest()->get();
        $sdgs = Sdg::latest()->get();

        return view('blogs.create', compact(
            'activities',
            'business_operations',
            'programs',
            'research_groups',
            'sdgs'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $blog = Blog::create($this->getValidate($request));
        $blog->sdgs()->attach(request('sdg_id'));
        return redirect(route('admin.index'));
    }

    /**
     * Display the specified resource.
     *
     * @return Application|Redirector|RedirectResponse
     */
    public function show()
    {
        return redirect(route('blogs.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Blog $blog
     * @return Application|Factory|View
     * @throws AuthorizationException
     */
    public function edit(Blog $blog)
    {
        $this->authorize('admin-access');
        $sdgs = Sdg::latest()->get();
        $activities = Activity::latest()->get();
        $business_operations = BusinessOperation::latest()->get();
        $programs = Program::latest()->get();
        $research_groups = ResearchGroup::latest()->get();

        return view('blogs.edit', compact(
            'activities',
            'blog',
            'business_operations',
            'programs',
            'research_groups',
            'sdgs',
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Blog $blog
     * @return Application|Redirector|RedirectResponse
     * @throws AuthorizationException
     */
    public function update(Request $request, Blog $blog)
    {
        $this->authorize('admin-access');
        $blog->update($this->getValidate($request));
        return redirect(route('admin.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Blog $blog
     * @return Application|Redirector|RedirectResponse
     * @throws Exception
     */
    public function destroy(Blog $blog)
    {
        $this->authorize('admin-access');
        $blog->sdgs()->detach();
        $blog->delete();
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
            'program_id' => 'nullable | integer',
            'business_operation_id' => 'nullable | integer',
            'research_group_id' => 'nullable | integer',
            'activity_id' => 'required | integer',
            'title' => 'required | max:255',
            'description' => 'required | max:255',
            'impact' => 'required | max:255',
            'link' => 'required | URL | max:255',
            'contact_name' => 'required | max:255',
            'contact_email' => 'required | email:rfc,dns'
        ]);
    }

    /**
     * Change the boolean to true in the database, then the non admin user will be able to see it
     * @param Blog $blog
     * @return Application|RedirectResponse|Redirector
     */
    public function changeVisibility(Blog $blog)
    {
        $blog->update(['visibility' => true]);
        $blog->save();
        return redirect(route('admin.index'));
    }
}
