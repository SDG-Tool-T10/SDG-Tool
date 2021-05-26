@extends('common.master')

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

    <div class="columns columns-container is-multiline">
        @forelse($blogs as $blog)
            <div class="column is-half">
                <div class="card">
                    <div class="card-stacked">
                        <div class="card-content blog-card">
                            <div class="media-content">
                                <p class="title is-4">{{ $blog->activity->name }} <i>Blog title</i></p>
                            </div>
                            <div class="subtitle is-6 sdg-content">
                                Impact: {{ $blog->impact }}<br>
                                Research Group: <br>
                                Program: {{ $blog->program->name }}<br>
                                Business Operation: {{ $blog->businessOperation->name }}<br>
                                SDGs:
                                @foreach($blog->sdgs as $sdg)
                                    {{ $sdg->name }}
                                @endforeach<br>
                                Subgoal:
                                @foreach($blog->subSdgs as $subSdg)
                                    {{ $subSdg }}
                                @endforeach<br>
                                Publisher: {{ $blog->contact_name }} <br>
                                Updated at: {{ $blog->updated_at }} <br>
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