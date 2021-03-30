<nav class="navbar is-info  has-text-white">
    <div class="container">
        <div class="navbar-brand">
            <a href="/" class="navbar-item">
                <img class="logo" src="./image/HZ_logo.png"/>
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">
                <a href="/"
                   class="navbar-item {{ Request::path() === '/' ? "is-active" : "" }}">
                    Dashboard
                </a>
                <a href="/blog"
                   class="navbar-item {{ Request::path() === 'blog' ? "is-active" : "" }}">
                    Blog
                </a>
                <a href="/admin"
                   class="navbar-item {{ Request::path() === 'admin' ? "is-active" : "" }}">
                    Admin
                </a>
            </div>
        </div>
    </div>
</nav>
