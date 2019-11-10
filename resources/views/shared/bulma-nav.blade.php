<nav class="navbar is-info is-relative" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ url('/') }}">
            LaraHighlights
        </a>
        @if (config('APP_ENV') !== 'production')
            <div class="navbar-item">
                @if (config('app.version'))
                    <span id="version-badge" class="tags has-addons">
                    <span class="tag has-background-white-ter">Version</span>
                    <span class="tag is-primary">
                        {{ config('app.version') }}
                    </span>
                </span>
                @endif
            </div>
        @endif

        <a role="button" :class="['navbar-burger burger', {
            'is-active': mobileMenuOpen
        }]" aria-label="menu" aria-expanded="false" data-target="primary-nav" @click="toggleMobileMenu">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="primary-nav" :class="['navbar-menu', {
        'is-active': mobileMenuOpen
    }]">

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    @if (Auth::check())
                        <a class="button is-light is-small" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @else
                    <a class="button is-primary is-small" href="/login">
                        <strong>Register</strong>
                    </a>
                    <a class="button is-light is-small" href="/login">
                        Log in
                    </a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</nav>
