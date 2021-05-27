@extends('common.master')

@section('script')
    <script type="text/javascript" src="/js/global.js"></script>
@endsection

@section('content')
    <section class="hero  is-medium  is-bold">
        <div class="header-img">
            <img src="/image/sdg-header-en.png"/>
        </div>
    </section>

    <form method="POST" class='blog-form' action="{{ route('blogs.store') }}" onsubmit="return checkForm(this)">
        @csrf
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Program</label>
            </div>
            <div class="field-body">
                <div class="field ">
                    <div class="control">
                        <div class="select is-fullwidth @error('program_id') is-danger @enderror">
                            <select class="select-education" type="text"
                                    id="program_id" name="program_id">
                                <option selected value=""> None</option>
                                @foreach ($programs as $program)
                                    <option value="{{ $program->id }}" {{(old('program')==$program->id ? "selected":"")}}>
                                        {{ $program->name }}
                                    </option>
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
                        <div class="select is-fullwidth @error('activity_id') is-danger @enderror">
                            <select class="select-activity" type="text"
                                    id="activity_id" name="activity_id">
                                <option selected value=""> None</option>
                                @foreach ($activities as $activity)
                                    <option value="{{ $activity->id }}" {{(old('activity')==$activity->id ? "selected":"")}}>
                                        {{ $activity->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('activity_id')
                        <p class="help is-danger">{{ $errors->first('activity_id') }}</p>
                        @enderror
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
                        <div class="select is-fullwidth @error('research_group_id') is-danger @enderror">
                            <select class="select-research" type="text"
                                    id="research_group_id" name="research_group_id">
                                <option selected value=""> None</option>
                                @foreach($research_groups as $research_group)
                                    <option value="{{ $research_group->id }}" {{ (old('research_id') == $research_group->id ? "selected":"") }}>
                                        {{ $research_group->name }}
                                    </option>
                                @endforeach
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
                        <div class="select is-fullwidth @error('sdg_id[]') is-danger @enderror">
                            <select class="select-sdg" type="text" id="sdg_id[]"
                                    name="sdg_id[]" required>
                                <option selected value=""> None</option>
                                @foreach ($sdgs as $sdg)
                                    <option value="{{$sdg->id}}" {{ (old('sdg') == $sdg->id ? "selected":"") }}>
                                        {{ $sdg->id }}. {{ $sdg->name }}
                                    </option>
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
                        <div class="select is-fullwidth @error('business_operation_id') is-danger @enderror">
                            <select class="select-policy" type="text" id="business_operation_id"
                                    name="business_operation_id">
                                <option selected value=""> None</option>
                                @foreach ($business_operations as $business_operation)
                                    <option value="{{ $business_operation->id }}" {{ (old('business_operation') == $business_operation->id ? "selected":"") }}>
                                        {{ $business_operation   ->name }}
                                    </option>
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
                        <div class="select is-fullwidth @error('sub_sdg_id') is-danger @enderror">
                            <select class="select-subgoal" type="text"
                                    id="sub_sdg_id" name="sub_sdg_id" value="{{ old('sub_sdg_id') }}">
                                {{-- TODO Shouldn't this be assigned dynamically from DB?--}}
                                <option disabled selected value=""> -- select an option --</option>
                                <option value="{{ old('sub_sdg_id') }}">Subgoal 1</option>
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
                        <input class="input @error('description') is-danger @enderror" name="description" type="text"
                               placeholder="Describe briefly" value="{{old('description')}}">
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
                        <input class="input @error('link') is-danger @enderror" name="link" type="text"
                               placeholder="Type the link here" value="{{old('link')}}">
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
                        <textarea class="textarea @error('impact') is-danger @enderror" name="impact" id="impact"
                                  placeholder="Explain your impact">{{old('impact')}}</textarea>
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
                        <input class="input @error('contact_name') is-danger @enderror" type="text" placeholder="Name"
                               id="contact_name"
                               name="contact_name" value="{{old('contact_name')}}">
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
                        <input class="input @error('contact_email') is-danger @enderror" type="text" placeholder="Email"
                               id="contact_email" name="contact_email" value="{{old('contact_email')}}">
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
                        <button class="button is-info" type="submit" value="Submit" name="submit">
                            Send message
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
