@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold">
        <div class="header-img">
            <img src="/image/sdg-header-en.png"/>
        </div>
    </section>
    <form method="POST" action="{{route('research_groups.store')}}">
        @csrf
        <section class="section">
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">New Research Group</label>
                </div>
                <div class="field-body">
                    <div class="field ">
                        <div class="control">
                            <input class="input {{$errors->has('name') ? 'is-danger' : ''}}" type="text" name="name"
                                   id="name" value="{{old('name')}}">

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
                            <button value="Submit" class="button is-info" type="submit">
                                <p>Create!</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
