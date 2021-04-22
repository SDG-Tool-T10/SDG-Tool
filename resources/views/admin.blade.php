@extends('common.master')

@section('content')
    <div class="padding-card">
        <div class="columns">
            <div class="column is-6 is-narrow">
                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            <header class="card-header-title columns">Blogs
                                <h1 class="padding-left-50">
                                    <button>
                                        <a href="{{ route('blogs.create') }}">Add a Blog</a>
                                    </button>
                                </h1>
                            </header>
                            <div class="container">
                                <table>
                                    <tbody>
                                    @foreach($blogs as $blog)
                                        <tr>
                                            <td>{{$blog->id}}</td>
                                            <td>
                                                <button class="has-text-right">
                                                    <a href="{{ route('blogs.edit', $blog) }}">Edit</a>
                                                </button>
                                            </td>
                                            <td>
                                                <form>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column is-6 is-narrow">
                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            <header class="card-header-title columns">Pending Blogs
                                <h1 class="padding-left-50">
                                    <button>Add a Blog</button>
                                </h1>
                            </header>
                            Lorem ipsum leo risus, porta ac consectetur ac, vestibulum at eros. Donec id elit non mi
                            porta gravida at eget metus. Cum sociis natoque penatibus et magnis dis parturient montes,
                            nascetur ridiculus mus. Cras mattis consectetur purus sit amet fermentum.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="columns">
                <div class="column is-6 is-narrow">
                    <div class="card">
                        <div class="card-content">
                            <div class="content">
                                <header class="card-header-title columns">Courses
                                    <h1 class="padding-left-50">
                                        <button>
                                            <a href="{{ route('courses.create') }}">Add a Course</a>
                                        </button>
                                    </h1>
                                </header>
                                <div class="container">
                                    <table>
                                        <tbody>
                                        @foreach($courses as $course)
                                            <tr>
                                                <td>{{$course->name}}</td>
                                                <td>
                                                    <button class="has-text-right">
                                                        <a href="{{ route('courses.edit', $course) }}">Edit</a>
                                                    </button>
                                                </td>
                                                <td>
                                                    <form method="POST" action="{{route('courses.destroy', $course)}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="has-text-right">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column is-6 is-narrow">
                    <div class="card">
                        <div class="card-content">
                            <div class="content">
                                <header class="card-header-title columns">Research Groups
                                    <h1 class="padding-left-50">
                                        <button>
                                            <a href="{{ route('research_groups.create') }}">Add a Research Group</a>
                                        </button>
                                    </h1>
                                </header>
                                <div class="container">
                                    <table>
                                        <tbody>
                                        @foreach($researchGroups as $researchGroup)
                                            <tr>
                                                <td>{{$researchGroup->name}}</td>
                                                <td>
                                                    <button class="has-text-right">
                                                        <a href="{{ route('research_groups.edit', $researchGroup) }}">Edit</a>
                                                    </button>
                                                </td>
                                                <td>
                                                    <form method="POST"
                                                          action="{{route('research_groups.destroy', $researchGroup)}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="has-text-right">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </diwv>
                        </div>
                    </div>
@endsection
