<nav class="navbar has-shadow is-white" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-start">
            <a class="navbar-item" href="{{route('home')}}">
                <img src="{{asset('images/devblog-logo.png')}}" alt="DevBlog" />
            </a>
            <a href="#" class="navbar-item is-tab is-hidden-mobile">Learn</a>
            <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
            <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>
        </div>
        <div class="navbar-end">
            @if (Auth::guest())
                <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                <a href="{{route('register')}}" class="navbar-item is-tab">Join the Community</a>
            @else
                <div class="navbar-item has-dropdown is-active">
                    <a class="navbar-link">
                        Hi Boris
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                            <span class="icon"><i class="fa fa-fw fa-user-circle-o"></i></span>
                            Profile
                        </a>
                        <a class="navbar-item">
                            <span class="icon"><i class="fa fa-fw fa-bell"></i></span>
                            Notifications
                        </a>
                        <a class="navbar-item">
                            <span class="icon"><i class="fa fa-fw fa-cog"></i></span>
                            Settings
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item">
                            <span class="icon"><i class="fa fa-sign-out "></i></span>
                            Logout
                        </a>
                    </div>
                    @endif
                </div>
        </div>
</nav>