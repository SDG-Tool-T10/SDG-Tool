@extends('common.master')

@section('content')
    <div class="columns columns-container">
        <div class="column is-full">
            <div class="card is-horizontal">
                <div class="sdg-card-image">
                    <figure class="image is-square">
                        <img class="alt-image" src="./../{{ $sdg->alt_img }}" alt="{{ $sdg->name }}">
                    </figure>
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <div class="media-content">
                            <p class="title is-3">{{ $sdg->alt_title }}</p>
                        </div>
                        <div class="subtitle is-5 sdg-content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Phasellus nec iaculis mauris.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="columns columns-container is-multiline">

        @foreach($sdg->blogs as $blog)
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
