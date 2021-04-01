@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold">
        <div class="header-img">
            <img src="/image/sdg-header-en.png"/>
        </div>
    </section>
    <form method="POST" action="{{ route('courses.update', $course) }}">
        @csrf
        @method('PUT')
        <section class="section">
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Edit Course</label>
                </div>
                <div class="field-body">
                    <div class="field ">
                        <div class="control">
                            <input class="input {{$errors->has('name') ? 'is-danger' : ''}}" type="text" name="name"
                                   id="name" value="{{ $course->name }}">
                            @error('name')
                            <p class="help is-danger">{{$errors->first('name')}}</p>
                            @enderror
                        </div>
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
                            <button class="button is-info" type="submit">
                                <p>Edit!</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
