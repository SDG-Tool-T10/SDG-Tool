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
    <div class="filter-option">
        <div class="single-filter select is-info is-rounded">
            <select id="sdgId" onchange="mySDG()">
                <option value="one" class="filter-title" disabled selected>Filter on SDG</option>
                <option>None</option>
                @foreach($sdgs as $sdg)
                    <option value="{{ $sdg->id }}">{{ $sdg->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="single-filter select is-info is-rounded">
            <select id="ActivityId" onchange="myActivity()">
                <option value="two" class="filter-title" disabled selected>Filter on Activity</option>
                <option>None</option>
                @foreach($activities as $activity)
                    <option value="{{ $activity->id }}">{{ $activity->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="single-filter select is-info is-rounded">
            <select id="BusinessId" onchange="myBusiness()">
                <option value="three" class="filter-title" disabled selected>Filter on Business Operation</option>
                <option>None</option>
                @foreach($business_operations as $business_operations)
                    <option value="{{ $business_operations->id }}">{{ $business_operations->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="single-filter select is-info is-rounded">
            <select id="ProgramId" onchange="myProgram()">
                <option value="four" class="filter-title" disabled selected>Filter on Program</option>
                <option>None</option>
                @foreach($programs as $programs)
                    <option value="{{ $programs->id }}">{{ $programs->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="columns columns-container is-multiline">
        @forelse($blogs as $blog)
            @continue($blog->visibility == 0)
            <div class="column is-half blogPost">
                <div class="card">
                    <div class="card-stacked">
                        <div class="card-content blog-card">
                            <div class="media-content">
                                <p class="activities title is-4">{{ $blog->activity->name }}</p>
                            </div>
                            <div class="subtitle is-6 sdg-content">
                                <p>Impact: {{ $blog->impact }}</p>
                                <p>Research Group:</p>
                                <p class="program">Program: {{ $blog->program->name ?? 'empty' }}</p>
                                <p class="businessOperation">Business
                                    Operation: {{ $blog->businessOperation->name ?? 'empty'}}</p>
                                <p>Subgoal: {{ $blog->subSdgs }}</p>
                                @foreach($blog->sdgs as $sdg)
                                    <p class="blogSDG">SDG: {{ $sdg->name }}</p>
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

    <script>
        function mySDG() {
            let input = document.getElementById("sdgId").value;
            let blogpost = document.getElementsByClassName("blogPost");
            let arr = Array.prototype.slice.call(blogpost);
            let sdgtest = document.getElementsByClassName("blogSDG");

            for (let i = 0; i < arr.length; i++) {
                if (input === sdgtest[i].innerText.substring(5) || input === "None") {
                    console.log(sdgtest[i].innerText.substring(5) + ' do match');
                    arr[i].style.display = "block";
                } else {
                    console.log(sdgtest[i].innerText.substring(5) + ' do NOT match');
                    arr[i].style.display = "none";
                }
            }

            if (input === "None") {
                document.getElementById("sdgId").value = "one";
            }
        }

        function myActivity() {
            let input = document.getElementById("ActivityId").value;
            let blogpost = document.getElementsByClassName("blogPost");
            let arr = Array.prototype.slice.call(blogpost);
            let sdgtest = document.getElementsByClassName("activities");

            for (let i = 0; i < arr.length; i++) {
                if (input === sdgtest[i].innerText.substring(0) || input === "None") {
                    console.log(sdgtest[i].innerText.substring(0) + ' do match');
                    arr[i].style.display = "block";
                } else {
                    console.log(sdgtest[i].innerText.substring(0) + ' do NOT match');
                    arr[i].style.display = "none";
                }
            }
            if (input === "None") {
                document.getElementById("ActivityId").value = "two";
            }
        }

        function myBusiness() {
            let input = document.getElementById("BusinessId").value;
            let blogpost = document.getElementsByClassName("blogPost");
            let arr = Array.prototype.slice.call(blogpost);
            let sdgtest = document.getElementsByClassName("businessOperation");

            console.log(sdgtest);

            for (let i = 0; i < arr.length; i++) {
                if (input === sdgtest[i].innerText.substring(20) || input === "None") {
                    console.log(sdgtest[i].innerText.substring(20) + ' do match');
                    arr[i].style.display = "block";
                } else {
                    console.log(sdgtest[i].innerText.substring(20) + ' do NOT match');
                    arr[i].style.display = "none";
                }
            }
            if (input === "None") {
                document.getElementById("BusinessId").value = "three";
            }
        }

        function myProgram() {
            let input = document.getElementById("ProgramId").value;
            let blogpost = document.getElementsByClassName("blogPost");
            let arr = Array.prototype.slice.call(blogpost);
            let sdgtest = document.getElementsByClassName("program");

            console.log(sdgtest);

            for (let i = 0; i < arr.length; i++) {
                if (input === sdgtest[i].innerText.substring(9) || input === "None") {
                    console.log(sdgtest[i].innerText.substring(9) + ' do match');
                    arr[i].style.display = "block";
                } else {
                    console.log(sdgtest[i].innerText.substring(9) + ' do NOT match');
                    arr[i].style.display = "none";
                }
            }
            if (input === "None") {
                document.getElementById("ProgramId").value = "four";
            }
        }
    </script>
@endsection
