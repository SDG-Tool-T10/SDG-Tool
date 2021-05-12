@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold">
        <div class="header-img">
            <img src="./image/sdg-header-en.png" />
        </div>
    </section>

{{--    <section class="hero  is-medium  is-bold">--}}
{{--        <div class="header-img">--}}
{{--            <img src="./image/sdg-photo.png" />--}}
{{--        </div>--}}
{{--    </section>--}}
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="card">
                    @auth()
                        @if (Auth::user()->admin)
                            Hey admin
                        @else
                            Hey User
                        @endif
                    @else
                        Hello Guest
                    @endauth
                    <div class="card-content">
                        <div class="content is-italic">
                            Here are some nice icons and maybe there should be a filter box somewhere..
                            Here are some nice icons and maybe there should be a filter box somewhere..
                            Here are some nice icons and maybe there should be a filter box somewhere..
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-sdg-goals is-align-content-space-evenly" style="padding-left: 90px">
                <div class="is-flex-wrap-wrap sdg-icon">
                    <a href="/sdg"><img src="./image/SDG-Icons-EN/sdg-en-01.png" /></a>
                    <a href="/sdg"><img src="./image/SDG-Icons-EN/sdg-en-02.png" /></a>
                    <a href="/sdg"><img src="./image/SDG-Icons-EN/sdg-en-03.png" /></a>
                    <a href="/sdg"><img src="./image/SDG-Icons-EN/sdg-en-04.png" /></a>
                    <a href="/sdg"><img src="./image/SDG-Icons-EN/sdg-en-05.png" /></a>
                    <a href="/sdg"><img src="./image/SDG-Icons-EN/sdg-en-06.png" /></a>
                    <a href="/sdg"><img src="./image/SDG-Icons-EN/sdg-en-07.png" /></a>
                    <a href="/sdg"><img src="./image/SDG-Icons-EN/sdg-en-08.png" /></a>
                    <a href="/sdg"><img src="./image/SDG-Icons-EN/sdg-en-09.png" /></a>
                    <a href="/sdg"><img src="./image/SDG-Icons-EN/sdg-en-10.png" /></a>
                    <a href="/sdg"><img src="./image/SDG-Icons-EN/sdg-en-11.png" /></a>
                    <a href="/sdg"><img src="./image/SDG-Icons-EN/sdg-en-12.png" /></a>
                    <a href="/sdg"><img src="./image/SDG-Icons-EN/sdg-en-13.png" /></a>
                    <a href="/sdg"><img src="./image/SDG-Icons-EN/sdg-en-14.png" /></a>
                    <a href="/sdg"><img src="./image/SDG-Icons-EN/sdg-en-15.png" /></a>
                    <a href="/sdg"><img src="./image/SDG-Icons-EN/sdg-en-16.png" /></a>
                    <a href="/sdg"><img src="./image/SDG-Icons-EN/sdg-en-17.png" /></a>
                    <a href="/sdg"><img src="./image/SDG-Icons-EN/sdg-en-18.png" /></a>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
