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
                            <div class="container fixed-height">
                                <table>
                                    <tbody>
                                    <th>Description</th>
                                    <th>Publisher</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    @forelse($blogs as $blog)
                                        @if($blog->visibility === 1)
                                        <tr>
                                            <td>{{ $blog->description }}</td>
                                            <td>{{ $blog->contact_name }}</td>
                                            <td>
                                                <button class="has-text-right">
                                                    <a href="{{ route('blogs.edit', $blog) }}">Edit</a>
                                                </button>
                                            </td>
                                            <td>
                                                <form method="POST"
                                                      action="{{route('blogs.destroy', $blog)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="has-text-right">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endif
                                    @empty
                                        <p>This block is currently empty</p>
                                    @endforelse
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
                            <div class="container fixed-height">
                                <table>
                                    <tbody>
                                    <th>Description</th>
                                    <th>E-mail</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Approve</th>
                                    @forelse($blogs as $blog)
                                        @if($blog->visibility === 0)
                                        <tr>
                                            <td>{{$blog->description}}</td>
                                            <td>{{$blog->contact_email}}</td>
                                            <td>
                                                <button class="has-text-right">
                                                    <a href="{{ route('blogs.edit', $blog) }}">Edit</a>
                                                </button>
                                            </td>
                                            <td>
                                                <form method="POST"
                                                      action="{{route('blogs.destroy', $blog)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="has-text-right">Delete</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form method="POST"
                                                      action="blogs/changevisibility/{{$blog->id}}">
                                                    @csrf
                                                    @method('PUT')
                                                <button class="has-text-right">Approve</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endif
                                    @empty
                                        <p>This block is currently empty</p>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
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
                                <header class="card-header-title columns">Programs
                                    <h1 class="padding-left-50">
                                        <button>
                                            <a href="{{ route('programs.create') }}">Add a Program</a>
                                        </button>
                                    </h1>
                                </header>
                                <div class="container fixed-height">
                                    <table>
                                        <tbody>
                                        @forelse($programs as $program)
                                            <tr>
                                                <td>{{$program->name}}</td>
                                                <td>
                                                    <button class="has-text-right">
                                                        <a href="{{ route('programs.edit', $program) }}">Edit</a>
                                                    </button>
                                                </td>
                                                <td>
                                                    <form method="POST"
                                                          action="{{route('programs.destroy', $program)}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="has-text-right">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <p>This block is currently empty</p>
                                        @endforelse
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
                                <div class="container fixed-height">
                                    <table>
                                        <tbody>
                                        @forelse($researchGroups as $researchGroup)
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
                                        @empty
                                            <p>This block is currently empty</p>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
