@extends('common.master')

@section('content')
<p>test</p>
hey {{ Auth::user()->name }}

<div class="mt-3 space-y-1">
    <!-- Authentication -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-responsive-nav-link :href="route('logout')"
                               onclick="event.preventDefault();
                                        this.closest('form').submit();">
            {{ __('Log out') }}
        </x-responsive-nav-link>
    </form>
</div>
@endsection
