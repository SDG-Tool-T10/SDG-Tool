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
    
    <div class="columns columns-container is-multiline blogs">
        @forelse($sdg->blogs as $blog)
            @continue(!$blog->visibility)
            <div class="column is-full blogPost">
                <div class="card card_with_blog">
                    <div class="card-stacked">
                        <div class="card-content card_container">
                            <div class="media-content card_link">
                                <a class="title blogTitle is-3" href="//{{ $blog->link }}">
                                    {{ $blog->title }}
                                </a>
                            </div>
                            <div class="subtitle is-6 sdg-content">
                                <p class="card_title">Impact:</p>
                                <p class="card_content-full">{{ $blog->impact }}</p>
                                <div>
                                    @foreach($blog->sdgs as $sdg)
                                        <p class="card_title">SDG:</p>
                                        <p class="card_content-full blogSDG">{{ $sdg->name }}</p>
                                    @endforeach
                                </div>
                                <div class="blog_container">
                                    <p class="card_title">Activity:</p>
                                    <p class="card_content-half activity">{{ $blog->activity->name }}</p>
                                </div>
                                <div class="blog_container">
                                    <p class="card_title">Research Group:</p>
                                    <p class="card_content-half researchGroup">{{ $blog->research_group->name ?? 'empty' }}</p>
                                </div>
                                <br>
                                <div class="blog_container">
                                    <p class="card_title">Program:</p>
                                    <p class="card_content-half program">{{ $blog->program->name ?? 'empty' }}</p>
                                </div>
                                <div class="blog_container">
                                    <p class="card_title">Business Operation:</p>
                                    <p class="card_content-half businessOperation">{{ $blog->business_operation->name ?? 'empty' }}</p>
                                </div>
                                <div class="blog_container">
                                    @foreach($blog->sub_sdgs as $sub_sdg)
                                        <p class="card_title">SDG:</p>
                                        <p>{{ $sub_sdg->name }}</p>
                                    @endforeach
                                </div>
                                <div class="blog_container-bottom">
                                    <p class="blog_footer"><b>Publisher:</b> {{ $blog->contact_name }} </p>
                                    <p class="blog_footer"><b>Updated at:</b> {{ $blog->updated_at }} </p>
                                </div>
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
