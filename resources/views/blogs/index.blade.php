@extends('common.master')

@section('script')
    <script type="text/javascript" src="/js/blog.js"></script>
@endsection

@section('content')
    <section class="hero is-info">
        <div class="hero-body container">
            <p class="title">
                All blogs on one page
            </p>
            <p class="subtitle">
                Use the filters to search for what you want
            </p>
        </div>
        <button class="button is-light is-link">
            <a href="{{ route('blogs.create') }}">Add a Blog</a>
        </button>
    </section>
    <div class="filter-option">
        <div class="single-filter select is-info is-rounded">
            <select id="filter1" onchange="myFilter()">
                <option value="None" class="filter-title" disabled selected>Filter on SDG</option>
                <option>None</option>
                @foreach($sdgs as $sdg)
                    <option value="{{ $sdg->name }}">{{ $sdg->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="single-filter select is-info is-rounded">
            <select id="filter2" onchange="myFilter()">
                <option value="None" class="filter-title" disabled selected>Filter on Activity</option>
                <option>None</option>
                @foreach($activities as $activity)
                    <option value="{{ $activity->name }}">{{ $activity->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="single-filter select is-info is-rounded">
            <select id="filter3" onchange="myFilter()">
                <option value="None" class="filter-title" disabled selected>Filter on Business Operation</option>
                <option>None</option>
                @foreach($business_operations as $business_operation)
                    <option value="{{ $business_operation->name }}">{{ $business_operation->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="single-filter select is-info is-rounded">
            <select id="filter4" onchange="myFilter()">
                <option value="None" class="filter-title" disabled selected>Filter on Program</option>
                <option>None</option>
                @foreach($programs as $program)
                    <option value="{{ $program->name }}">{{ $program->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="single-filter select is-info is-rounded">
            <select id="filter5" onchange="myFilter()">
                <option value="None" class="filter-title" disabled selected>Filter on Research Group</option>
                <option>None</option>
                @foreach($research_groups as $research_group)
                    <option value="{{ $research_group->name }}">{{ $research_group->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="single-filter is-info is-rounded">
            <button onClick="window.location.reload()" class="is-rounded button is-info is-outlined">Reset</button>
        </div>
    </div>


    <div class="columns columns-container is-multiline">
        @forelse($blogs as $blog)
            <div class="column is-full blogPost">
                <div class="card">
                    <div class="card-stacked">
                        <div class="card-content blog-card">
                            <div class="media-content">
                                <p class="title is-4">{{ $blog->title }}</p>
                            </div>
                            <div class="subtitle is-6 sdg-content">
                                <p class="impactTitle">Impact:</p>
                                <p class="blogImpact">{{ $blog->impact }}</p>
                                <div class="container">
                                    <p class="subtitle">Activity:</p>
                                    <p class="blogDesign activity">{{ $blog->activity->name }}</p>
                                </div>
                                <div class="container">
                                    <p class="subtitle">Research Group:</p>
                                    <p class="blogDesign researchGroup">{{ $blog->research_group->name ?? 'empty' }}</p>
                                </div>
                                <div class="container">
                                    <p class="subtitle">Program:</p>
                                    <p class="blogDesign program">{{ $blog->program->name ?? 'empty' }}</p>
                                </div>
                                <div class="container">
                                    <p class="subtitle">Business Operation:</p>
                                    <p class="blogDesign businessOperation">{{ $blog->business_operation->name ?? 'empty' }}</p>
                                </div>
                                <div class="container">
                                    @foreach($blog->sdgs as $sdg)
                                        <p class="subtitle">SDG:</p>
                                        <p class="blogDesign blogSDG">{{ $sdg->name }}</p>
                                    @endforeach
                                </div>
                                <div class="container">
                                    @foreach($blog->sub_sdgs as $sub_sdg)
                                        <p class="subtitle">SDG:</p>
                                        <p>{{ $sub_sdg->name }}</p>
                                    @endforeach
                                </div>
                                <p>Publisher: {{ $blog->contact_name }} </p>
                                <p>Updated at: {{ $blog->updated_at }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p>No blogs to show at the moment.</p>
        @endforelse
    </div>
@endsection
