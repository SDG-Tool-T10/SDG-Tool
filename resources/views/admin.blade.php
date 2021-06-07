@extends('common.master')
@section('content')
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Search Area ***** -->
    <div id="search">
        <button type="button" class="close">×</button>
        <form id="contact" action="#" method="get">
            <fieldset>
                <input type="search" name="q" placeholder="SEARCH KEYWORD(s)" aria-label="Search through site content">
            </fieldset>
            <fieldset>
                <button type="submit" class="main-button">Search</button>
            </fieldset>
        </form>
    </div>
    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="image/slide-01.jpg" alt="">
                    <div class="text-content">
                        <h3>Welcome To SDG-Tool</h3>
                        <h5>Sustainable Development Goals</h5>
                        <a href="#" class="main-stroked-button">Learn More</a>
                        <a href="#" class="main-filled-button">Get It Now</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="image/slide-02.jpg" alt="">
                    <div class="text-content">
                        <h3>HZ-University Of Applied Sciences Contribution</h3>
                        <h5>Sustainable Development Goals</h5>
                        <a href="#" class="main-stroked-button">Read More</a>
                        <a href="#" class="main-filled-button">Take Action</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="image/slide-03.jpg" alt="">
                    <div class="text-content">
                        <h3>For A Cleaner Future</h3>
                        <h5>Projects, Research and More</h5>
                        <a href="#" class="main-stroked-button">Learn More</a>
                        <a href="#" class="main-filled-button">Get It Now</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
        </div>
    </div>
    <div class="scroll-down scroll-to-section"><a href="#about"><i class="fa fa-arrow-down"></i></a></div>
    <!-- ***** Main Banner Area End ***** -->
    <div class="padding-card" id="about">
        <div class="columns">
            <div class="column is-6 is-narrow">
                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            <header class="card-header-title columns">Blogs
                                <h1 class="column has-text-right content-margin">
                                    <button class="button is-white disabled" disabled>
                                        <a href="#"></a>
                                    </button>
                                </h1>
                            </header>
                            <div class="container fixed-height">
                                <table>
                                    <tbody>
                                    <th class="content-width2">Description</th>
                                    <th class="content-width2">Type of Activity</th>
                                    <th class="content-width2">Publisher</th>
                                    <th></th>
                                    <th></th>
                                    @forelse($blogs as $blog)
                                        @if($blog->visibility === 1)
                                            <tr>
                                                <td>{{ $blog->description }}</td>
                                                <td>{{ $blog->activity->name }}</td>
                                                <td>{{ $blog->contact_name }}</td>
                                                <td>
                                                    <button class="button is-small is-light">
                                                        <a href="{{ route('blogs.edit', $blog) }}">Edit</a>
                                                    </button>
                                                </td>
                                                <td>
                                                    <form method="POST"
                                                          action="{{route('blogs.destroy', $blog)}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="button is-small is-light">Delete</button>
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
                                <h1 class="column has-text-right content-margin">
                                    <button class="button is-light">
                                        <a href="{{ route('blogs.create') }}">Add a Blog</a>
                                    </button>
                                </h1>
                            </header>
                            <div class="container fixed-height">
                                <table>
                                    <tbody>
                                    <th class="content-width2">Description</th>
                                    <th class="content-width2">E-mail</th>
                                    <th class="content-width2">Created at</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    @forelse($blogs as $blog)
                                        @if($blog->visibility === 0)
                                            <tr>
                                                <td>{{ $blog->description }}</td>
                                                <td>{{ $blog->contact_email }}</td>
                                                <td>{{ $blog->created_at->format('d-m-Y') }}</td>
                                                <td>
                                                    <button class="button is-small is-light">
                                                        <a href="{{ route('blogs.edit', $blog) }}">Edit</a>
                                                    </button>
                                                </td>
                                                <td>
                                                    <form method="POST"
                                                          action="{{ route('blogs.destroy', $blog) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="button is-small is-light">Delete</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form method="POST"
                                                          action="blogs/changevisibility/{{$blog->id}}">
                                                        @csrf
                                                        @method('PUT')
                                                        <button class="button is-small is-light">Approve</button>
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
        <div class="columns">
            <div class="column is-6 is-narrow">
                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            <header class="card-header-title columns">Programs
                                <h1 class="column has-text-right content-margin">
                                    <button class="button is-light">
                                        <a href="{{ route('programs.create') }}">Add a Program</a>
                                    </button>
                                </h1>
                            </header>
                            <div class="container fixed-height">
                                <table>
                                    <tbody>
                                    @forelse($programs as $program)
                                        <tr>
                                            <td class="content-width">{{$program->name}}</td>
                                            <td>
                                                <button class="button is-small is-light">
                                                    <a href="{{ route('programs.edit', $program) }}">Edit</a>
                                                </button>
                                            </td>
                                            <td>
                                                <form method="POST"
                                                      action="{{ route('programs.destroy', $program) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="button is-small is-light">Delete</button>
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
                                <h1 class="column has-text-right content-margin">
                                    <button class="button is-light">
                                        <a href="{{ route('research_groups.create') }}">Add a Research Group</a>
                                    </button>
                                </h1>
                            </header>
                            <div class="container fixed-height">
                                <table>
                                    <tbody>
                                    @forelse($researchGroups as $researchGroup)
                                        <tr>
                                            <td class="content-width">{{$researchGroup->name}}</td>
                                            <td>
                                                <button class="button is-small is-light">
                                                    <a href="{{ route('research_groups.edit', $researchGroup) }}">Edit</a>
                                                </button>
                                            </td>
                                            <td>
                                                <form method="POST"
                                                      action="{{ route('research_groups.destroy', $researchGroup) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="button is-small is-light">Delete</button>
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
        <div class="columns">
            <div class="column is-6 is-narrow">
                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            <header class="card-header-title columns">Type of Activities
                                <h1 class="column has-text-right content-margin">
                                    <button class="button is-light">
                                        <a href="{{ route('activities.create') }}">Add a Type of
                                            Activity</a>
                                    </button>
                                </h1>
                            </header>
                            <div class="container fixed-height">
                                <table>
                                    <tbody>
                                    @forelse($activities as $activity)
                                        <tr>
                                            <td class="content-width">{{ $activity->name }}</td>
                                            <td>
                                                <button class="button is-small is-light">
                                                    <a href="{{ route('activities.edit', $activity) }}">Edit</a>
                                                </button>
                                            </td>
                                            <td>
                                                <form method="POST"
                                                      action="{{ route('activities.destroy', $activity) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="button is-small is-light">
                                                        Delete
                                                    </button>
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
                            <header class="card-header-title columns">Business
                                Operations
                                <h1 class="column has-text-right content-margin">
                                    <button class="button is-light">
                                        <a href="{{ route('business_operations.create') }}">Add
                                            a Business Operation</a>
                                    </button>
                                </h1>
                            </header>
                            <div class="container fixed-height">
                                <table>
                                    <tbody>
                                    @forelse($businessOperations as $businessOperation)
                                        <tr>
                                            <td class="content-width">{{ $businessOperation->name }}</td>
                                            <td>
                                                <button
                                                    class="button is-small is-light">
                                                    <a href="{{ route('business_operations.edit', $businessOperation) }}">Edit</a>
                                                </button>
                                            </td>
                                            <td>
                                                <form method="POST"
                                                      action="{{ route('business_operations.destroy', $businessOperation) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                        class="button is-small is-light">
                                                        Delete
                                                    </button>
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
        <div class="columns">
            <div class="column is-6 is-narrow">
                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            <header class="card-header-title columns">SDG
                                Excerpts
                            </header>
                            <h1 class="column has-text-right content-margin">
                                <button class="button is-white disabled"
                                        disabled>
                                    <a href="#"></a>
                                </button>
                            </h1>
                            <div class="container fixed-height">
                                <table>
                                    <tbody>
                                    @forelse($sdgs as $sdg)
                                        <tr>
                                            <td class="content-width">{{ $sdg->id }}
                                                . {{ $sdg->name }}</td>
                                            <td>
                                                <button
                                                    class="button is-small is-light">
                                                    <a href="{{ route('sdgs.edit', $sdg) }}">Edit</a>
                                                </button>
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
@endsection
