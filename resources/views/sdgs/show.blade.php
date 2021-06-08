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
                            {{ $sdg->excerpt }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="columns columns-container is-multiline">
        @foreach($sdg->blogs as $blog)
            @continue($blog->visibility == 0)
            <div class="column is-half">
                <div class="card">
                    <div class="card-image">
{{--                        <figure class="image is-2by1">--}}
{{--                            <a href="//{{ $blog->link }}">--}}
{{--                                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">--}}
{{--                            </a>--}}
{{--                        </figure>--}}
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <div class="media-content">
                                <a class="title is-4" href="//{{ $blog->link }}">
                                    {{ $blog->activity->name }} - {{ $blog->title }}
                                </a>
                            </div>
                            <div class="subtitle is-6 sdg-content">
                                Impact: {{ $blog->impact }}<br>
                                Research Group: {{ $blog->research_group->name ?? 'empty' }}<br>
                                Program: {{ $blog->program->name ?? 'empty' }}<br>
                                Business Operation: {{ $blog->business_operation->name ?? 'empty' }}<br>
                                SDGs:
                                @foreach($blog->sdgs as $sdg)
                                    {{ $sdg->name }}
                                @endforeach<br>
                                Subgoal:
                                @foreach($blog->sub_sdgs as $sub_sdg)
                                    {{ $sub_sdg }}
                                @endforeach<br>
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
