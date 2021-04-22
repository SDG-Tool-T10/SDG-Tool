@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold">
        <div class="header-img">
            <img src="/image/sdg-header-en.png" />
        </div>
    </section>

    <form method="POST" class='blog-form' action="{{ route('blogs.store') }}">
        @csrf
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Course</label>
            </div>
            <div class="field-body">
                <div class="field ">
                    <div class="control">
                        <div class="select is-fullwidth">
                            <select class="select-education @error('course') is-danger @enderror" type="text"
                                    id="course" name="course">
                                <option value="{{ old('none') }}">None</option>
                                @foreach ($course as $course)
                                    <option value={{ $course->name }}>{{ $course->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Type of Activity</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <div class="select is-fullwidth">
                            <select class="select-activity @error('activity') is-danger @enderror" type="text"
                                    id="activity" name="activity">
                                <option value="{{ old('none') }}">None</option>
                                @foreach ($activity as $activity)
                                    <option value={{ $activity->name }}>{{ $activity->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Research</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <div class="select is-fullwidth">
                            <select class="select-research @error('research') is-danger @enderror" type="text"
                                    id="research" name="research">
                                <option value="{{ old('none') }}">None</option>
                                <option value="{{ old('business_development') }}">Business development</option>
                                <option value="{{ old('marketing') }}">Marketing</option>
                                <option value="{{ old('sales') }}">Sales</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Sustainable Development Goal</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <div class="select is-fullwidth">
                            <select class="select-sdg @error('sdg') is-danger @enderror" type="text" id="sdg"
                                    name="sdg">
                                <option value="{{ old('none') }}">None</option>
                                @foreach ($sdg as $sdg)
                                    <option value={{ $sdg->name }}>{{ $sdg->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Business Operations</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <div class="select is-fullwidth">
                            <select class="select-policy @error('business_operation') is-danger @enderror" type="text" id="business_operation"
                                    name="business_operation" value="{{ old('business_operation') }}">
                                <option value="{{ old('none') }}">None</option>
                                @foreach ($business_operation as $business_operation)
                                    <option value={{ $business_operation -> name }}>{{ $business_operation -> name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Subgoal</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <div class="select is-fullwidth">
                            <select class="select-subgoal @error('subgoal') is-danger @enderror" type="text"
                                    id="subgoal" name="subgoal" value="{{ old('subgoal') }}">
                                <option value="{{ old('none') }}">None</option>
                                <option value="{{ old('subgoal1') }}">Subgoal 1</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Describe activity</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <input class="input @error('description') is-danger @enderror" name="description" type="text" placeholder="describe briefly" value="{{$blog->description}}">
                    </div>
                    @error('description')
                    <p class="help is-danger">{{ $errors->first('description') }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Link</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <input class="input @error('link') is-danger @enderror" name="link" type="text" placeholder="type the link here" value="{{$blog->link}}">
                    </div>
                    @error('link')
                    <p class="help is-danger">{{ $errors->first('link') }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Describe impact</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <textarea class="textarea @error('impact') is-danger @enderror" name="impact" placeholder="Explain you impact">{{ $blog->impact }}</textarea>
                    </div>
                    @error('impact')
                    <p class="help is-danger">{{ $errors->first('impact') }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Contact</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded has-icons-left">
                        <input class="input @error('name') is-danger @enderror" type="text" placeholder="Name" id="name"
                               name="contact_name" value="{{ $blog->contact_name }}">
                        <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                    </p>
                    @error('contact_name')
                    <p class="help is-danger">{{ $errors->first('contact_name') }}</p>
                    @enderror
                </div>
                <div class="field">
                    <p class="control is-expanded has-icons-left has-icons-right">
                        <input class="input @error('email') is-danger @enderror" type="text" placeholder="Email"
                               id="email" name="contact_email" value="{{ $blog->contact_name }}">
                        <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </span>
                        <span class="icon is-small is-right">
                                <i class="fas fa-check"></i>
                            </span>
                    </p>
                    @error('contact_email')
                    <p class="help is-danger">{{ $errors->first('contact_email') }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label">
                <!-- Left empty for spacing -->
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <button class="button is-info" type="submit" value="Submit">
                            Send message
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
