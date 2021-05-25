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
    </section>

    <div class="columns columns-container is-multiline">

        @foreach($blogs as $blog)
            @continue($blog->visibility == 1)
            <div class="column is-half">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-2by1">
                            <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <div class="media-content">
                                <p class="title is-4">{{ $blog->activity->name }} <i>Blog title</i></p>
                            </div>
                            <div class="subtitle is-6 sdg-content">
                                Impact: {{ $blog->impact }}<br>
                                Research Group: <br>
                                Program: {{ $blog->program->name }}<br>
                                Business Operation: {{ $blog->businessOperation->name }}<br>
                                Subgoal: {{ $blog->subSdgs }}<br>
                                Publisher: {{ $blog->contact_name }} <br>
                                Updated at: {{ $blog->updated_at }} <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection