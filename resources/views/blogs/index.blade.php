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
                @foreach($business_operations as $business_operations)
                    <option value="{{ $business_operations->name }}">{{ $business_operations->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="single-filter select is-info is-rounded">
            <select id="filter4" onchange="myFilter()">
                <option value="None" class="filter-title" disabled selected>Filter on Program</option>
                <option>None</option>
                @foreach($programs as $programs)
                    <option value="{{ $programs->name }}">{{ $programs->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="columns columns-container is-multiline">
        @forelse($blogs as $blog)
            <div class="column is-half blogPost">
                <div class="card">
                    <div class="card-stacked">
                        <div class="card-content blog-card">
                            <div class="media-content">
                                <p class="title is-4 activities">{{ $blog->activity->name }}</p>
                            </div>
                            <div class="subtitle is-6 sdg-content">
                                <p>Impact: {{ $blog->impact }}</p>
                                <p>Research Group:</p>
                                <p class="program">Program: {{ $blog->program->name ?? 'empty' }}</p>
                                <p class="businessOperation">Business Operation: {{$blog->business_operation->name ?? 'empty'}}</p>
                                @foreach($blog->sdgs as $sdg)
                                    <p class="blogSDG">SDG: {{ $sdg->name }}</p>
                                @endforeach
                                @foreach($blog->sub_sdgs as $sub_sdg)
                                <p>Subgoal: {{ $sub_sdg->name }}</p>
                                @endforeach
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
