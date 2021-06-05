@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold">
        <div class="header-img">
            <img src="/image/sdg-header-en.png"/>
        </div>
    </section>
    <form method="POST" action="{{ route('sdgs.update', $sdg) }}">
        @csrf
        @method('PUT')
        <section class="section">
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Edit SDG Excerpt</label>
                </div>
                <div class="field-body">
                    <div class="field ">
                        <div class="control">
                            <input class="input {{ $errors->has('excerpt') ? 'is-danger' : '' }}" type="text" name="excerpt"
                                   id="excerpt" value="{{ $sdg->excerpt }}">
                            @error('excerpt')
                            <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
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
                            <button class="button is-info" type="submit">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
