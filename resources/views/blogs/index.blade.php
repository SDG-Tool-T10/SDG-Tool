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

    <div class="filter-option">
        <h1>SDG</h1>
        <div class="select is-info is-rounded">
            <select id="sdgId" onchange="myFunction()">
                <option selected> None</option>
                @foreach($sdgs as $sdg)
                    <option value="{{$sdg->name}}">{{$sdg->name}}</option>
                @endforeach
            </select>
        </div>
        <h1>Activity</h1>
        <div class="select is-info is-rounded">
            <select>
                <option selected> None</option>
                @foreach($activities as $activity)
                    <option value="{{$activity->name}}">{{$activity->name}}</option>
                @endforeach
            </select>
        </div>
        <h1>Business Operations</h1>
        <div class="select is-info is-rounded">
            <select>
                <option selected> None</option>
                @foreach($business_operations as $business_operations)
                    <option value="{{$business_operations->name}}">{{$business_operations->name}}</option>
                @endforeach
            </select>
        </div>
        <h1>Programs</h1>
        <div class="select is-info is-rounded">
            <select>
                <option selected> None</option>
                @foreach($programs as $programs)
                    <option value="{{$programs->name}}">{{$programs->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="columns columns-container is-multiline">
        @foreach($blogs as $blog)
            @continue($blog->visibility == 0)
            <div class="column is-half">
                <div class="card">
                    <div class="card-stacked">
                        <div class="card-content blog-card">
                            <div class="media-content">
                                <p class="title is-4">{{ $blog->activity->name }} <i>Blog title</i></p>
                            </div>
                            <div class="subtitle is-6 sdg-content">
                                <p>Impact: {{ $blog->impact }}</p>
                                <p>Research Group:</p>
                                <p>Program: {{ $blog->program->name }}</p>
                                <p>Business Operation: {{ $blog->businessOperation->name }}</p>
                                <p>Subgoal: {{ $blog->subSdgs }}</p>
                                <p>SDG:
                                @foreach($blog->sdgs as $sdg)
                                        {{$sdg->name}}</p>
                                @endforeach
                                <p>Publisher: {{ $blog->contact_name }} </p>
                                <p>Updated at: {{ $blog->updated_at }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <script>
        function myFunction() {
            let input = document.getElementById("sdgId").value;
            let database =
            // console.log(input);
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>
@endsection
