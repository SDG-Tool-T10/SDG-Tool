{{-- <nav class="navbar is-info  has-text-white">
    <div class="container">
        <div class="navbar-brand">
            <a href="/" class="navbar-item">
                <img class="logo" src="/image/HZ_logo.png"/>
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">
                <a href="/" class="navbar-item {{ Request::path() === '/' ? 'is-active' : '' }}">
                    Dashboard
                </a>
                @auth()
                    @if (Auth::user()->email_verified_at)
                        <a href="/blogs" class="navbar-item {{ Request::path() === 'blogs' ? 'is-active' : '' }}">
                            Blogs
                        </a>
                    @endif
                @endauth
                @auth()
                    @if (Auth::user()->admin == 1)
                        <a href="/admin" class="navbar-item {{ Request::path() === 'admin' ? 'is-active' : '' }}">
                            Admin
                        </a>
                    @endif
                @endauth
            </div>
            <div class="navbar-end">
                @auth()
                    <div class="navbar-item space-y-1">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                {{ __('Log out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                @else
                    <a href="/login" class="navbar-item {{ Request::path() === 'login' ? 'is-active' : '' }}">
                        Login
                    </a>
                    <a href="/register" class="navbar-item {{ Request::path() === 'register' ? 'is-active' : '' }}">
                        Register
                    </a>
                @endauth
                <a href="/contact" class="navbar-item {{ Request::path() === 'contact' ? 'is-active' : '' }}">
                    Contact
                </a>
            </div>
        </div>
    </div>
</nav> --}}
<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        SDG-Tool
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section">
                            <a href="/" {{ Request::path() === '/' ? 'is-active' : '' }}>Dashboard</a>
                        </li>
                        @auth()
                            <li class="scroll-to-section">
                                @if (Auth::user()->email_verified_at)
                                    <a href="/blogs" {{ Request::path() === 'blogs' ? 'is-active' : '' }}>Blog</a>
                                @endif
                            </li>
                        @endauth
                        @auth()
                            <li class="scroll-to-section">
                                @if (Auth::user()->email_verified_at)
                                    <a href="/admin" {{ Request::path() === 'admin' ? 'is-active' : '' }}>Admin</a>
                                @endif
                            </li>
                        @endauth
                        @auth()
                            <li class="scroll-to-section">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a :href="route('logout')" onclick="event.preventDefault();
                                                                                    this.closest('form').submit();">
                                        {{ __('Log out') }}
                                    </a>
                                </form>
                            @else
                            <li class="scroll-to-section"><a href="/login"
                                    class="{{ Request::path() === 'login' ? 'is-active' : '' }}">
                                    Login
                                </a></li>
                            <li class="scroll-to-section"><a href="/register"
                                    class="{{ Request::path() === 'register' ? 'is-active' : '' }}">
                                    Register
                                </a></li>
                        @endauth
                        </li>
                        <li class="scroll-to-section"><a href="#contact-us">Contact Us</a></li>
                        <div class="search-icon">
                            <a href="#search"><i class="fa fa-search"></i></a>
                        </div>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
